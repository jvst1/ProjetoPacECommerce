describe('teste cadastro', function(){
    it('teste cadatro', function(){
        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

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
        
        //cy.get('#btncadastrar').click()
    })
})