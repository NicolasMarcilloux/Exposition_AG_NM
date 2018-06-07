
plugin.tx_expositionagnm_agnm1 {
  view {
    templateRootPaths.0 = EXT:exposition_ag_nm/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_expositionagnm_agnm1.view.templateRootPath}
    partialRootPaths.0 = EXT:exposition_ag_nm/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_expositionagnm_agnm1.view.partialRootPath}
    layoutRootPaths.0 = EXT:exposition_ag_nm/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_expositionagnm_agnm1.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_expositionagnm_agnm1.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_expositionagnm._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-exposition-ag-nm table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-exposition-ag-nm table th {
        font-weight:bold;
    }

    .tx-exposition-ag-nm table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
