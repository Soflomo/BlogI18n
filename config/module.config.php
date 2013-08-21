<?php

return array(
    'soflomo_blog' => array(
        'article_entity_class' => 'Soflomo\BlogI18n\Entity\Article',
    ),

    'doctrine' => array(
        'driver' => array(
            'soflomo_blog_i18n' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => __DIR__ . '/mapping'
            ),

            'orm_default' => array(
                'drivers' => array(
                    'Soflomo\BlogI18n\Entity' => 'soflomo_blog_i18n',
                ),
            ),
        ),
        'entity_resolver' => array(
            'orm_default' => array(
                'resolvers' => array(
                    'Soflomo\Blog\Entity\ArticleInterface'                => 'Soflomo\BlogI18n\Entity\Article',
                    'Soflomo\BlogI18n\Entity\ArticleTranslationInterface' => 'Soflomo\BlogI18n\Entity\ArticleTranslation',
                ),
            ),
        ),
    ),
);