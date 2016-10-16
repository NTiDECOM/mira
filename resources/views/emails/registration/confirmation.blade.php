<h2>Olá {{ $registration->name }}!</h2>
<p>
    Sua inscrição no seminário "A Felicidade é Possível" de Divaldo Pereira Franco foi realizada com sucesso.
    <br />
    O seminário será realizado pela Federação Espírita Paraibana no dia 08 de Janeiro de 2017 <br />
    no teatro A Pedra do Reino do Centro de Convenções.
    O Ingresso custa R$ 60,00. Gratuitamente você ganhará um livro da Mansão do Caminho.
    <br />
    Para realizar o pagamento de sua inscrição, acesse: <a href="{{url('/payments', $registration->id)}}" target="_blank">{{url('/payments', $registration->id)}}</a>
</p>
<p>
    Atenciosamente, <br />
    Federação Espírita Paraibana
</p>
