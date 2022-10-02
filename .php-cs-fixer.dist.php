<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

return (new Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'no_extra_blank_lines' => true,
        'blank_line_after_namespace' => true,
        'blank_line_after_opening_tag' => true,
        'binary_operator_spaces' => [
            'operators' => [
                '=' => 'single_space'
            ]
        ],
        'braces' => true,
        'cast_spaces' => true,
        'class_definition' => [
            'single_line' => true,
            'single_item_single_line' => true,
            'multi_line_extends_each_single_line' => true,
        ],
        'class_keyword_remove' => false,
        'concat_space' => true,
        'combine_consecutive_unsets' => true,
        'declare_equal_normalize' => false,
        'elseif' => true,
        'encoding' => true,
        'ereg_to_preg' => true,
        'full_opening_tag' => true,
        'function_declaration' => true,
        'function_typehint_space' => true,
        'single_line_comment_style' => true,
        'indentation_type' => true,
        'line_ending' => true,
        'linebreak_after_opening_tag' => true,
        'lowercase_cast' => true,
        'constant_case' => true,
        'lowercase_keywords' => true,
        'mb_str_functions' => false,
        'method_argument_space' => true,
        'class_attributes_separation' => [
            'elements' => [
                'const' => 'one',
                'method' => 'one',
                'property' => 'one'
            ],
        ],
        'modernize_types_casting' => true,
        'native_function_casing' => true,
        'new_with_braces' => true,
        'no_alias_functions' => false,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => false,
        'no_blank_lines_before_namespace' => false,
        'no_closing_tag' => true,
        'no_empty_comment' => false,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_mixed_echo_print' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'multiline_whitespace_before_semicolons' => true,
        'no_php4_constructor' => true,
        'no_short_bool_cast' => true,
        'echo_tag_syntax' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_spaces_after_function_name' => true,
        'no_spaces_inside_parenthesis' => true,
        'no_trailing_comma_in_list_call' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_trailing_whitespace' => true,
        'no_trailing_whitespace_in_comment' => true,
        'no_unreachable_default_argument_value' => true,
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line' => true,
        'normalize_index_brace' => true,
        'not_operator_with_successor_space' => true,
        'object_operator_without_whitespace' => true,
        'ordered_imports' => [
            'sort_algorithm' => 'alpha',
            'imports_order' => ['const', 'class', 'function']
        ],
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_align' => true,
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_indent' => true,
        'phpdoc_inline_tag_normalizer' => true,
        'phpdoc_no_empty_return' => true,
        'phpdoc_scalar' => true,
        'protected_to_private' => true,
        'psr_autoloading' => true,
        'return_type_declaration' => false,
        'self_accessor' => true,
        'semicolon_after_instruction' => true,
        'short_scalar_cast' => true,
        'simplified_null_return' => false,
        'single_blank_line_at_eof' => true,
        'single_blank_line_before_namespace' => true,
        'single_import_per_statement' => true,
        'single_line_after_imports' => true,
        'single_quote' => true,
        'space_after_semicolon' => true,
        'standardize_not_equals' => true,
        'switch_case_semicolon_to_colon' => true,
        'switch_case_space' => true,
        'strict_comparison' => false,
        'strict_param' => false,
        'ternary_operator_spaces' => true,
        'trailing_comma_in_multiline' => true,
        'trim_array_spaces' => true,
        'unary_operator_spaces' => true,
        'whitespace_after_comma_in_array' => true,
    ])
    ->setFinder(
        Finder::create()
            ->exclude('vendor')
            ->in(__DIR__)
    )
;