<?php 
namespace Alura\CleanArchitecture\test\Application\Student;

use Alura\CleanArchitecture\src\Application\Student\StudentRegister\StudentRegister;
use Alura\CleanArchitecture\src\Application\Student\StudentRegister\StudentRegisterDto;
use Alura\CleanArchitecture\src\Domain\Cpf;
use Alura\CleanArchitecture\src\Infra\Student\StudentRepositoryMemory;
use PHPUnit\Framework\TestCase;

class StudentRegisterTest extends TestCase
{
    public function test_student_add_repository()
    {
        $studentRegister = new StudentRegisterDto("123.456.789-10", "Thomas", "thomas@gmail.com");

        $repository = new StudentRepositoryMemory();

        $useCase = new StudentRegister($repository);
        $useCase->execute($studentRegister);

        $student = $repository->getStudentWithCpf(new Cpf("123.456.789-10"));

        $this->assertSame("Thomas", (string) $student->getName());
        $this->assertSame("thomas@gmail.com", (string) $student->getEmail());
        $this->assertEmpty($student->phones());
    }
}