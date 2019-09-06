<form action="POST">
<?php

interface QuestionInsert{//интерфейс функции вывода
    public function InsertQuestion();
}

Class Question implements QuestionInsert{//класс структуры вопроса

    public $question;//переменные вопроса и трех ответов
    public $option1;
    public $option2;
    public $option3;

    function __construct($question, $option1, $option2, $option3)//конструктор для переменных
    {
        $this->question = $question;
        $this->option1 = $option1;
        $this->option2 = $option2;
        $this->option3 = $option3;
    }

    public function InsertQuestion(){//функция вывода вопроса на экран
        $Insert = $this->question.'?'.' 1.'.$this->option1.' 2.'.$this->option2.' 3.'.$this->option3.' ';
        return $Insert;
    }
}

final class ExtendedQuestion extends Question{//класс расширенного вопроса, наследующий структуру обычного вопроса без последующего наследования

    public $option4;
    public $option5;


    function __construct($question, $option1, $option2, $option3, $option4, $option5)//расширение конструктора
    {
        parent::__construct($question, $option1, $option2, $option3);
        $this->option4 = $option4;
        $this->option5 = $option5;
    }

    public function InsertQuestion()//расширение функции вывода
    {
        $Insert = parent::InsertQuestion();
        $Insert .= ' 4.'.$this->option4.' 5.'.$this->option5;
        return $Insert;
    }
}

$user1 = new Question(how, yes, no, maybe);//пример вопроса с ответами
print_r($user1->InsertQuestion());
$user2 = new ExtendedQuestion('how are you', 'no', 'yes', 'maybe', 'not', 'yea');
print_r($user2->InsertQuestion());
?>
</form>