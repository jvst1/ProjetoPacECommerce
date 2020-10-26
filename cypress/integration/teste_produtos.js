describe('teste produtos', function(){
    it('teste produtos', function(){
        cy.visit('http://localhost/ProjetoPacECommerce/index.php')

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
    })
})