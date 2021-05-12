<?php include 'header.php' ?>
<div class="row mr-0" id="#home">
    <div class="col-12 col-md-10">
        <!-- <h1>Webservice DNA Certificadora</h1> -->
        <p>
            Webservice Revenda é uma ferramenta para nosso parceiros no modelo revena. 
            Seu objetivo é permitir que o sue sistema possa ase integrado ao nosso sistema de revenda facilitando assim a 
            comunicação e gestão dos pedidos e tickets.
        </p>
    </div>

    <div class="col-12 ol-md-10">
        <h2>Integrando</h2>
        <p>
            A nova API de Integração do revenda foi construída com base em tecnologias atuais, 
            visando principalmente padronização de acesso e segurança.
        </p>
        
        <h3>Restful</h3>
        <p>
            Utilizamos verbos do protocolo HTTP para identificar as operações que serão executadas, padronizamos a nomenclatura e 
            as configurações de acesso dos recursos e retornamos HTTP Status Codes condizentes com a resposta gerada.
        </p>
    </div>

    <div class="col-12 ol-md-10">
        <h2>Endpoints do Sistemas</h2>
        <p>
           <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Ambiente</th>
                        <th>URL</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Desenvolvimento</td>
                        <td> <a href="#">https://api-dna.ciaweb.dev.br</a> </td>
                    </tr>
                </tbody>
           </table>
        </p>
    </div>

    <div id="autenticacao" class="col-12 ol-md-10">
        <h2>Autenticação</h2>
        <p>
            <b>Para obter acesso aos serviços de autorização, você precisa:</b>
        </p>

        <p>
            <ul>
                <li>Solicitar uma conta para o ambiente de desenvolvimento. Sugerimos utilizar um cadastro oficial da pessoa ou da empresa que fará a integração.</li>
                <li>Com seu cadastro em desenvolvimento completo, enviaremos o par de acessos clientId e clientSecret. O mesmo processo deve ser feito em produção.</li>
                <li>Chamar o serviço de autorização passando as credenciais criadas para autorização na API de Integração.</li>
            </ul>
        </p>
    </div>

    <div id="produtos" class="col-12 ol-md-10">
        <h2>Produtos</h2>
        <p>
            <b>Nesse bloco de recursos, você pode entender melhor como funciona a consulta de produtos.</b><br>
            <br>
            A seção compreende:
            <ul>
                <li>Consulta de produtos</li>
            </ul>
        </p>

        <p>
            <h4>Listar Produtos</h4>
            
            <p>Para consultar a lista de produtos disponíveis, você deve enviar via <code>GET</code> os seguintes dados:</p>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Requisição</th>
                        <th>URL</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>GET</td>
                        <td> <a href="#">/product</a> </td>
                    </tr>
                </tbody>
           </table>

            <h4>Parâmetro Headers</h4>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Paramâmetro</th>
                        <th>Tipo de Dados</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>clientID</td>
                        <td>String</td>
                    </tr>
                    <tr>
                        <td>clientSecret</td>
                        <td>String</td>
                    </tr>
                </tbody>
           </table>

            <h4>Retorno da Requisição</h4>
            <div class="code"><code>
                    - {
                        code: <span>INTEGER</span>
                        - data: [
                            - {
                                cod_produto: <span>INTEGER</span>
                                nome_produto: <span>STRING</span>
                            }
                        ]
                    }
                </code></div>
            
        </p>
    </div>

    <div id="pedidos" class="col-12 ol-md-10">
        <h2>Pedidos</h2>
        <p>
            <b>Nesse bloco de recursos, você pode entender melhor como funciona a feature de pedidos.</b><br>
            <br>
            A seção compreende:
            <ul>
                <li>Consultar Pedidos</li>
                <li>Gerar Ticket para Pessoa Fisíca</li>
                <li>Gerar Ticket para Pessoa Jurídica</li>
            </ul>
        </p>

        <p>
            <h4>Listar Pedidos</h4>

            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Requisição</th>
                        <th>URL</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>GET</td>
                        <td> <a href="#">/request</a> </td>
                    </tr>
                </tbody>
            </table>
            <p>Para consultar a lista os pedidos disponíveis, você deve enviar via <code>GET</code> os seguintes dados:</p>
            
            <h4>Parâmetro Headers</h4>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Paramâmetro</th>
                        <th>Tipo de Dados</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>clientID</td>
                        <td>String</td>
                    </tr>
                    <tr>
                        <td>clientSecret</td>
                        <td>String</td>
                    </tr>
                </tbody>
            </table>

            <h4>Retorno da Requisição</h4>
            <div class="code"><code>
                    - {
                        code: <span>INTEGER</span>
                        - data: [
                            - {
                                cod_pedido: <span>INTEGER</span>
                                dt_cadastro: <span>DATE</span>
                                dt_pagamento: <span>DATE</span>
                                dt_faturamento: <span>DATE</span>
                                status: <span>STRING</span>
                                - itens: {
                                    cod_produto: <span>INTEGER</span>
                                    produto: <span>STRING</span>
                                    qtde: <span>INTEGER</span>
                                }   
                            }
                        ]
                    }
            </code></div>
            
        </p>

        <p>
            <h4>Gerar Ticket Pessoa Física</h4>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Requisição</th>
                        <th>URL</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>POST</td>
                        <td> <a href="#">/request</a> </td>
                    </tr>
                </tbody>
            </table>            
            <p>Para gerar o ticket do pedido, você deve enviar via <code>POST</code> os seguintes dados:</p>
            
            <h4>Parâmetro Headers</h4>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Paramâmetro</th>
                        <th>Tipo de Dados</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>clientID</td>
                        <td>String</td>
                    </tr>
                    <tr>
                        <td>clientSecret</td>
                        <td>String</td>
                    </tr>
                </tbody>
            </table>

            <h4>Parâmetro Body</h4>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Paramâmetro</th>
                        <th>Tipo de Dados</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>cpf</td>
                        <td>String</td>
                    </tr>
                    <tr>
                        <td>nome</td>
                        <td>String</td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td>String</td>
                    </tr>
                    <tr>
                        <td>telefone</td>
                        <td>String</td>
                    </tr>
                    <tr>
                        <td>cod_produto</td>
                        <td>INT</td>
                    </tr>
                </tbody>
            </table>

            <h4>Retorno da Requisição</h4>
            <div class="code"><code>
                    - {
                        code: <span>INTEGER</span>
                        - data: [
                            - {
                                cod_pedido: <span>INTEGER</span>
                                cod_venda: <span>INTEGER</span>
                                ticket: <span>STRING</span>
                            }
                        ]
                    }
            </code></div>
            
        </p>

        <p>
            <h4>Gerar Ticket Pessoa Jurídica</h4>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Requisição</th>
                        <th>URL</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>POST</td>
                        <td> <a href="#">/request/pj</a> </td>
                    </tr>
                </tbody>
            </table>            
            <p>Para gerar o ticket do pedido, você deve enviar via <code>POST</code> os seguintes dados:</p>
            
            <h4>Parâmetro Headers</h4>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Paramâmetro</th>
                        <th>Tipo de Dados</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>clientID</td>
                        <td>String</td>
                    </tr>
                    <tr>
                        <td>clientSecret</td>
                        <td>String</td>
                    </tr>
                </tbody>
            </table>

            <h4>Parâmetro Body</h4>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Paramâmetro</th>
                        <th>Tipo de Dados</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>cnpj</td>
                        <td>String</td>
                    </tr>
                    <tr>
                        <td>razao_social</td>
                        <td>String</td>
                    </tr>
                    <tr>
                        <td>cpf</td>
                        <td>String</td>
                    </tr>
                    <tr>
                        <td>nome</td>
                        <td>String</td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td>String</td>
                    </tr>
                    <tr>
                        <td>telefone</td>
                        <td>String</td>
                    </tr>
                    <tr>
                        <td>cod_produto</td>
                        <td>INT</td>
                    </tr>
                </tbody>
            </table>

            <h4>Retorno da Requisição</h4>
            <div class="code"><code>
                    - &#123;
                        code: <span>INTEGER</span>
                        - data: [
                            - &#123;
                                cod_pedido: <span>INTEGER</span>
                                cod_venda: <span>INTEGER</span>
                                ticket: <span>STRING</span>
                            &#125;
                        ]
                    &#125;
            </code></div>
            
        </p>
    </div>

    <div class="col-12 ol-md-10">
        <h2>Suporte</h2>
        <p>
            E-mail: <a href="mailto:suporte@dnacertificadora.com">suporte@dnacertificadora.com</a>
        </p>
    </div>
</div>
<?php include 'footer.php'; ?>