<?php
namespace LendoUmCheque;

class TokenizerTest extends \PHPUnit_Framework_TestCase
{
    public function testCreatingAnInstanceOfTokenizerWithAnExpressionWillStoreThatExpression()
    {
        $tokenizer = new Tokenizer('Uma expressão');

        $this->assertEquals('Uma expressão', $tokenizer->expression);
    }

    public function testAfterCreatingAnInstanceOfTokenizerWeCanGetAnArrayOfTokens()
    {
        $tokenizer = new Tokenizer('Uma expressão');

        $tokens = $tokenizer->getTokens();

        $this->assertCount(2, $tokens);
        $this->assertEquals('Uma', $tokens[0]);
        $this->assertEquals('expressão', $tokens[1]);
   
    }

    public function testCallingCurrentWillReturnTheCurrentToken()
    {
        $tokenizer = new Tokenizer('Uma outra expressão');

        $current = $tokenizer->current($tokenizer[0]);

        $this->assertEquals('Uma', $current);
    }
}
