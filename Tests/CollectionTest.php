<?php

namespace Macsakini\CosmosDB\Test;

use Macsakini\CosmosDB\Collection;
use PHPUnit\Framework\TestCase;


final class CollectionTest extends TestCase
{
    public function testClassConstructor()
    {
        $collection = new Collection(
            'https://buysadb.documents.azure.com:443/',
            'lwoRtHgTHwy6iH18roGLNQxwm3iZai0Nl9NPBNudNKpjIUZosmwDMduGMIxVQyWbUMx4OopZiKUmACDbuXO21A==',
            'Variants'
        );

        $this->assertSame('https://buysadb.documents.azure.com:443/', $collection->host);
        $this->assertSame('lwoRtHgTHwy6iH18roGLNQxwm3iZai0Nl9NPBNudNKpjIUZosmwDMduGMIxVQyWbUMx4OopZiKUmACDbuXO21A==', $collection->private_key);
        $this->assertSame('Variants', $collection->dbid);
    }

    public function testAuthFunction()
    {
        $collection = new Collection(
            'https://buysadb.documents.azure.com:443/',
            'lwoRtHgTHwy6iH18roGLNQxwm3iZai0Nl9NPBNudNKpjIUZosmwDMduGMIxVQyWbUMx4OopZiKUmACDbuXO21A==',
            'Variants'
        );

        $collection->auth(
            'https://buysadb.documents.azure.com:443/',
            'lwoRtHgTHwy6iH18roGLNQxwm3iZai0Nl9NPBNudNKpjIUZosmwDMduGMIxVQyWbUMx4OopZiKUmACDbuXO21A==',
            "get",
            "2",
            "3",
            "4"
        );
    }

    public function testDeleteFunction()
    {
        $collection = new Collection(
            'https://buysadb.documents.azure.com:443/',
            'lwoRtHgTHwy6iH18roGLNQxwm3iZai0Nl9NPBNudNKpjIUZosmwDMduGMIxVQyWbUMx4OopZiKUmACDbuXO21A==',
            'Variants'
        );
        $collection->delete("VariantsContainer");
    }

    public function testGetFunction()
    {
        $collection = new Collection(
            'https://buysadb.documents.azure.com:443/',
            'lwoRtHgTHwy6iH18roGLNQxwm3iZai0Nl9NPBNudNKpjIUZosmwDMduGMIxVQyWbUMx4OopZiKUmACDbuXO21A==',
            'Variants'
        );
        $collection->get("VariantsContainer");
    }

    public function testListFunction()
    {
        $collection = new Collection(
            'https://buysadb.documents.azure.com:443/',
            'lwoRtHgTHwy6iH18roGLNQxwm3iZai0Nl9NPBNudNKpjIUZosmwDMduGMIxVQyWbUMx4OopZiKUmACDbuXO21A==',
            'Variants'
        );
    }

    public function testCreateFunction()
    {
        $collection = new Collection(
            'https://buysadb.documents.azure.com:443/',
            'lwoRtHgTHwy6iH18roGLNQxwm3iZai0Nl9NPBNudNKpjIUZosmwDMduGMIxVQyWbUMx4OopZiKUmACDbuXO21A==',
            'Variants'
        );
        $collection->delete("VariantContainer");
    }
}
