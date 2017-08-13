
$(document).ready(function() {
    $('#example').DataTable();
    CKEDITOR.editorConfig = function( config ) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;
};
    CKEDITOR.replace( 'editor1' );
});
$(document).ready(function(){
     $('#registrationForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                    },
                    stringLength: {
                        min: 6,
                        max: 30
                    },
                    regexp: {
                        regexp: /^[a-zA-Z\s]*$/
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                    },
                    emailAddress: {
                    },
                    regexp: {
                        regexp: /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                    },
                    stringLength: {
                        min: 8
                    }
                }
            },
            mobile: {
                validators: {
                    notEmpty: {
                        message: 'The mobile phone number is required'
                    },
                    stringLength: {
                        min: 10
                    }
                }
            },
            avatar: {
                validators: {
                    notEmpty: {
                        message: 'Please select an avatar'
                    },
                    file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        message: 'The selected file is not valid'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                    }
                }
            },
            title: {
                validators: { 
                    notEmpty: {
                    }
                }
            },
            image: {
                validators: {
                    notEmpty: {
                        message: 'Please select an image'
                    },
                    file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        message: 'The selected file is not valid'
                    }
                }
            },
            description: {
                validators: { 
                    notEmpty: {
                    }
                }
            },
            content: {
                validators: { 
                    notEmpty: {
                    }
                }
            },
            created_at: {
                validators: {
                    notEmpty: {
                    },
                    date: {
                        format: 'YYYY/DD/MM h:m:s',
                        message: 'The value is not a valid date'
                    }
                }
            }
        }
    });
})

$(function () {
    $('#datetimepicker1').datetimepicker({
        format: 'YYYY/DD/MM h:m:s'
    });
});