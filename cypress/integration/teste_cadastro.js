import cadastro_userLocator from '../support/cadastro_userLocator'
describe('teste cadastro', function(){
    it('teste cadatro', function(){
        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

        cy.get('#cadastrar').click()

        cy.get(cadastro_userLocator.LIST.NOME_COMPLETO)
            .type('teste teste')
            .should('have.value', 'teste teste')

        cy.get(cadastro_userLocator.LIST.USUARIO)
            .type('teste@gmail.com')
            .should('have.value', 'teste@gmail.com')

        cy.get(cadastro_userLocator.LIST.CPF)
            .type('12345678910')
            .should('have.value', '123.456.789-10')

        cy.get(cadastro_userLocator.LIST.TELEFONE)
            .type('12345678901')
            .should('have.value', '(12) 3 4567-8901')

        cy.get(cadastro_userLocator.LIST.ENDERECO)
            .type('rua teste')
            .should('have.value', 'rua teste')

        cy.get(cadastro_userLocator.LIST.BAIRRO)
            .type('bairro teste')
            .should('have.value', 'bairro teste')

        cy.get(cadastro_userLocator.LIST.CIDADE)
            .type('joinville')
            .should('have.value', 'joinville')

        cy.get(cadastro_userLocator.LIST.ESTADO).click()
        
        cy.get('span')
            .contains('Santa Catarina').click({force : true})

        cy.get(cadastro_userLocator.LIST.NUM_CASA)
            .type('123')
            .should('have.value', '123')

        cy.get(cadastro_userLocator.LIST.CEP)
            .type('12345678')
            .should('have.value', '12345678')

        cy.get(cadastro_userLocator.LIST.SENHA)
            .type('1234')
            .should('have.value', '1234')

        cy.get(cadastro_userLocator.LIST.CONFIRMA_SENHA)
            .type('1234')
            .should('have.value', '1234')
        
        cy.get(cadastro_userLocator.LIST.BTN_CADASTRAR).click()

        cy.get('#email')
            .type('teste@gmail.com')
            .should('have.value', 'teste@gmail.com')
        
        cy.get('#senha')
            .type('1234')
            .should('have.value', '1234')
        
        cy.get('#btnlogin').click()

        cy.get('#logout > .material-icons').click()
        

    })
})