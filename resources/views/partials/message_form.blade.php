  <div class="modal fade" id="ContactModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Nová správa:</h4>
      </div>

      <div class="modal-body">
        <!-- SHOW ERROR/SUCCESS MESSAGES -->


        <form name="MessageForm" 
              ng-submit="MessageForm.$valid && mail.sendMessage()" novalidate >
          <!-- NAME -->
          <div class="form-group" ng-class="{'has-error' : errorName }">
            <label for="sender-name" class="control-label">Meno:</label>
            <input  type="text" name="name" 
                    id="sender-name" class="form-control"
                    placeholder="Meno Priezvisko"
                    ng-model="mail.data.name" required/>
            <span class="help-block" ng-show="errorName">{{ errorName }}</span>
            <p ng-show="mail.data.name.$invalid" class="help-block">
              Prosím zadajte svoje meno.</p>
          </div>
          <!-- EMAIL -->
          <div class="form-group" ng-class="{ 'has-error' : errorEmail }">
              <label for="sender-email" class="control-label">Email:</label>
              <input  type="email" name="email" 
                      id="sender-email" class="form-control" 
                      placeholder="mail@priklad.sk"
                      ng-model="mail.data.email" required />
              <span class="help-block" ng-show="errorEmail">{{ errorEmail }}</span>
              <p ng-show="mail.data.email.$invalid" class="help-block">
                Prosím zadajte korektný email.</p>
          </div>

          <!-- MESSAGE -->
          <div class="form-group" ng-class="{ 'has-error' : errorMessage }">
            <label for="message-text" class="control-label">Správa:</label>
            <textarea name="message" id="message-text" class="form-control" 
                    placeholder="Sem prosím napíšte Vašu otázku, objednávku, správu ..."
                    ng-model="mail.data.message" required ></textarea>
            <span class="help-block" ng-show="errorMessage">{{ errorMessage }}</span>
            <p ng-show="mail.data.message.$invalid" class="help-block">
              Prosím zadajte svoju správu.</p>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Storno</button>
        <button type="button" class="btn btn-primary" ng-click="MessageForm.$valid && mail.sendMessage()" >
        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
        Odoslať správu</button>
      </div>

    </div>
  </div><!-- end MessageController -->
  </div><!-- end MODAL FORM -->