abstract class Pessoa
{
    public $codigo, $nome;
    private $dataNascimento;

    public abstract function imprimir();

    public function __construct($codigo, $nome, $dataNascimento)
    {
        $this->setCodigo($codigo);
        $this->setNome($nome);
        $this->setDataNascimento($dataNascimento);
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo): void
    {
        $this->codigo = $codigo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }
}
