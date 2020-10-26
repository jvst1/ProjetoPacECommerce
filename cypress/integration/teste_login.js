describe('teste login', function(){
    it('teste login', function(){
        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

        cy.get('#entrar').click()

        cy.get('#email')
            .type('teste@gmail.com')
            .should('have.value', 'teste@gmail.com')
        
        cy.get('#senha')
            .type('1234')
            .should('have.value', '1234')
        
        cy.get('#btnlogin').click()

        cy.get('#logout').click()
    })
})