describe('teste completo', function(){
    it('teste completo', function(){
        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

        //TESTE LOGIN DE USUARIO
        cy.get('#entrar').click()

        cy.get('#email')
            .type('joao@')
            .should('have.value', 'joao@')

        cy.get('#senha')
            .type('1234')
            .should('have.value', '1234')
        
        cy.get('#btnlogin').click()

        cy.get('#logout').click()

        //TESTE PRODUTOS
        cy.get('[href="tela_info_produto.php?id=1"] > img').click()

        cy.get('.brand-logo').click()
        
        cy.get('[href="tela_info_produto.php?id=2"] > img').click()

        cy.get('.brand-logo').click()
        
        cy.get('[href="tela_info_produto.php?id=3"] > img').click()

        cy.get('.brand-logo').click()

        cy.get('[href="tela_info_produto.php?id=4"] > img').click()

        cy.get('.brand-logo').click()

        cy.get('[href="tela_info_produto.php?id=5"] > img').click()

        cy.get('.brand-logo').click()

        cy.get('[href="tela_info_produto.php?id=6"] > img').click()

        cy.get('.brand-logo').click()

        cy.get('[href="tela_info_produto.php?id=7"] > img').click()

        cy.get('.brand-logo').click()

        cy.get('[href="tela_info_produto.php?id=8"] > img').click()

        cy.get('.brand-logo').click()

        cy.get('[href="tela_info_produto.php?id=9"] > img').click()

        cy.get('.brand-logo').click()

        cy.get('[href="tela_info_produto.php?id=10"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

        //TESTE CAMPO ENVIAR EMAIL

        cy.get('textarea')
            .type('texto teste')
            .should('have.value', 'texto teste')
        
        cy.get('.btn').click()


        //TESTE CADASTRAR

       cy.get('#cadastrar').click()

        cy.get('#nomecompleto')
            .type('teste teste')
            .should('have.value', 'teste teste')

        cy.get('#usuario')
            .type('teste@gmail.com')
            .should('have.value', 'teste@gmail.com')

        cy.get('#cpf')
            .type('12345678910')
            .should('have.value', '123.456.789-10')

        cy.get('#telefone')
            .type('12345678901')
            .should('have.value', '(12) 3 4567-8901')

        cy.get('#endereco')
            .type('rua teste')
            .should('have.value', 'rua teste')

        cy.get('#bairro')
            .type('bairro teste')
            .should('have.value', 'bairro teste')

        cy.get('#cidade')
            .type('joinville')
            .should('have.value', 'joinville')

        //cy.get('.dropdown-trigger').click()
        //    .get('#SC')

        cy.get('#num')
            .type('123')
            .should('have.value', '123')

        cy.get('#cep')
            .type('12345678')
            .should('have.value', '12345678')

        cy.get('#senha')
            .type('1234')
            .should('have.value', '1234')

        cy.get('#senhaconfirm')
            .type('1234')
            .should('have.value', '1234')

        cy.visit('http://localhost/ProjetoPacECommerce/telalogin.php')

        cy.get('#email')
            .type('teste@gmail.com')
            .should('have.value', 'teste@gmail.com')

        cy.get('#senha')
            .type('1234')
            .should('have.value', '1234')
        
        cy.get('#btnlogin').click()

        //TESTE PRODUTOS LOGADOS/

        cy.get('[href="tela_info_produto.php?id=1"] > img').click()

        cy.get('.brand-logo').click()
        
        cy.get('[href="tela_info_produto.php?id=2"] > img').click()

        cy.get('.brand-logo').click()
        
        cy.get('[href="tela_info_produto.php?id=3"] > img').click()

        cy.get('.brand-logo').click()

        //cy.get('[href="tela_info_produto.php?id=4"] > img').click()

        //cy.get('.brand-logo').click()

        cy.get('[href="tela_info_produto.php?id=5"] > img').click()

        cy.get('.brand-logo').click()

        cy.get('[href="tela_info_produto.php?id=6"] > img').click()

        cy.get('.brand-logo').click()

        //cy.get('[href="tela_info_produto.php?id=7"] > img').click()

        //cy.get('.brand-logo').click()

        cy.get('[href="tela_info_produto.php?id=8"] > img').click()

        cy.get('.brand-logo').click()

        //cy.get('[href="tela_info_produto.php?id=9"] > img').click()

        //cy.get('.brand-logo').click()

        cy.get('[href="tela_info_produto.php?id=10"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

        cy.get('#logout').click()
        
        
    })
})