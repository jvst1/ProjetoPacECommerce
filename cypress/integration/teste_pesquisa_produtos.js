describe('teste pesquisa produtos', function(){
    it('teste pesquisa produtos', function(){
        cy.visit('http://localhost/ProjetoPacECommerce/index.php')  

        cy.get('#search').click()
            .type('camiseta')
            .should('have.value', 'camiseta')

        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=1"] > img').click()
        
        cy.get('.brand-logo').click()
        //---------------------------------------------------------
        cy.get('#search').click()
            .type('calça')
            .should('have.value', 'calça')
        
        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=2"] > img').click()

        cy.get('.brand-logo').click()
        //---------------------------------------------------------
        cy.get('#search').click()
            .type('meia')
            .should('have.value', 'meia')
        
        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=3"] > img').click()

        cy.get('.brand-logo').click()
        //---------------------------------------------------------
        cy.get('#search').click()
            .type('escada')
            .should('have.value', 'escada')
        
        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=4"] > img').click()

        cy.get('.brand-logo').click()
        //---------------------------------------------------------
        cy.get('#search').click()
            .type('telha')
            .should('have.value', 'telha')

        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=5"] > img').click()

        cy.get('.brand-logo').click()
        //---------------------------------------------------------
        cy.get('#search')
            .type('cotonete')
            .should('have.value', 'cotonete')

        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=6"] > img').click()

        cy.visit('http://localhost/ProjetoPacECommerce/index.php?pesquisa=cotonete')
        
        cy.get('[href="tela_info_produto.php?id=7"] > img').click()
        
        cy.get('.brand-logo').click()
        //---------------------------------------------------------
        cy.get('#search')
            .type('cotonetegrande')
            .should('have.value', 'cotonetegrande')

        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=7"] > img').click()

        cy.get('.brand-logo').click()
        //---------------------------------------------------------
        cy.get('#search')
            .type('betoneira')
            .should('have.value', 'betoneira')
        
        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=8"] > img').click()

        cy.get('.brand-logo').click()
        //---------------------------------------------------------
        cy.get('#search')
            .type('delineadorcolorido')
            .should('have.value', 'delineadorcolorido')

        cy.get('button > .material-icons').click()

        cy.get('[href="tela_info_produto.php?id=9"] > img').click()

        cy.get('.brand-logo').click()
        //---------------------------------------------------------
        cy.get('#search')
            .type('latinha')
            .should('have.value', 'latinha')

        cy.get('button > .material-icons').click()
        //---------------------------------------------------------

    })
})


