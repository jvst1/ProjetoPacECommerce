describe('teste produtos index logado', function(){
    it('teste produtos index logado', function(){
        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

        //LOGIN DE USUARIO
        cy.get('#entrar').click()

        cy.get('#email')
            .type('teste@gmail.com')
            .should('have.value', 'teste@gmail.com')
        
        cy.get('#senha')
            .type('1234')
            .should('have.value', '1234')
        
        cy.get('#btnlogin').click()

        //PRODUTOS
        cy.get('[href="tela_info_produto.php?id=1"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')
        
        cy.get('[href="tela_info_produto.php?id=2"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')
        
        cy.get('[href="tela_info_produto.php?id=3"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

        cy.get(':nth-child(4) > .card-content').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

        cy.get('[href="tela_info_produto.php?id=5"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

        cy.get('[href="tela_info_produto.php?id=6"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

        cy.get(':nth-child(7) > .card-content').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

        cy.get('[href="tela_info_produto.php?id=8"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

        cy.get(':nth-child(9) > .card-content').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

        cy.get('[href="tela_info_produto.php?id=10"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

        //ACESSO INDEX
        cy.visit('http://localhost/ProjetoPacECommerce/index.php')
        
        //PESQUISA PRODUTOS
        cy.get('#search').click()
            .type('camiseta')
            .should('have.value', 'camiseta')

        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=1"] > img').click()
        
        cy.visit('http://localhost/ProjetoPacECommerce/index.php')
        //---------------------------------------------------------
        cy.get('#search').click()
            .type('calça')
            .should('have.value', 'calça')
        
        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=2"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')
        //---------------------------------------------------------
        cy.get('#search').click()
            .type('meia')
            .should('have.value', 'meia')
        
        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=3"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')
        //---------------------------------------------------------
        cy.get('#search').click()
            .type('escada')
            .should('have.value', 'escada')
        
        cy.get('button > .material-icons').click()

        cy.get('.list-products2 > .card > .card-content').click()


        cy.visit('http://localhost/ProjetoPacECommerce/index.php')
        //---------------------------------------------------------
        cy.get('#search').click()
            .type('telha')
            .should('have.value', 'telha')

        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=5"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')
        //---------------------------------------------------------
        cy.get('#search')
            .type('cotonete')
            .should('have.value', 'cotonete')

        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=6"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php?pesquisa=cotonete')
        
        cy.get('.list-products2 > :nth-child(2) > .card-content').click()
        
        cy.visit('http://localhost/ProjetoPacECommerce/index.php')
        //---------------------------------------------------------
        cy.get('#search')
            .type('cotonete enorme')
            .should('have.value', 'cotonete enorme')

        cy.get('button > .material-icons').click()

        cy.get('.list-products2 > .card > .card-content').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')
        //---------------------------------------------------------
        cy.get('#search')
            .type('betoneira')
            .should('have.value', 'betoneira')
        
        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=8"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')
        //---------------------------------------------------------
        cy.get('#search')
            .type('delineador colorido')
            .should('have.value', 'delineador colorido')

        cy.get('button > .material-icons').click()

        cy.get('.list-products2 > .card > .card-content').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')
        //---------------------------------------------------------
        cy.get('#search')
            .type('latinha')
            .should('have.value', 'latinha')

        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=10"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php')
        //---------------------------------------------------------

        //DESLOGA USUARIO

        cy.get('#logout > .material-icons').click()
    })
})