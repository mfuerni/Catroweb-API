<?php
/**
 * AuthenticationApiInterfaceTest
 * PHP version 8.1.1.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.1.2
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Server\Tests\Api;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * AuthenticationApiInterfaceTest Class Doc Comment.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 *
 * @internal
 * @coversNothing
 */
class AuthenticationApiInterfaceTest extends WebTestCase
{
  private static ?KernelBrowser $client = null;

  /**
   * Setup before running any test cases.
   */
  public static function setUpBeforeClass(): void
  {
  }

  /**
   * Setup before running each test case.
   */
  public function setUp(): void
  {
    if (null === self::$client) {
      self::$client = static::createClient();
    }
  }

  /**
   * Clean up after running each test case.
   */
  public function tearDown(): void
  {
    static::ensureKernelShutdown();
  }

  /**
   * Clean up after running all test cases.
   */
  public static function tearDownAfterClass(): void
  {
  }

  /**
   * Test case for authenticationDelete.
   *
   * Expires refresh token.
   */
  public function testAuthenticationDelete(): void
  {
    $client = self::$client;

    $path = '/authentication';

    $crawler = $client->request('DELETE', $path);
  }

  /**
   * Test case for authenticationGet.
   *
   * Check token.
   */
  public function testAuthenticationGet(): void
  {
    $client = self::$client;

    $path = '/authentication';

    $crawler = $client->request('GET', $path);
  }

  /**
   * Test case for authenticationOauthPost.
   *
   * OAuth Login.
   */
  public function testAuthenticationOauthPost(): void
  {
    $client = self::$client;

    $path = '/authentication/oauth';

    $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
  }

  /**
   * Test case for authenticationPost.
   *
   * Login.
   */
  public function testAuthenticationPost(): void
  {
    $client = self::$client;

    $path = '/authentication';

    $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
  }

  /**
   * Test case for authenticationRefreshPost.
   *
   * Refresh token.
   */
  public function testAuthenticationRefreshPost(): void
  {
    $client = self::$client;

    $path = '/authentication/refresh';

    $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
  }

  /**
   * Test case for authenticationUpgradePost.
   *
   * Upgrade a deprecated token to JWT.
   */
  public function testAuthenticationUpgradePost(): void
  {
    $client = self::$client;

    $path = '/authentication/upgrade';

    $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
  }

  /**
   * @return mixed
   */
  protected function genTestData(string $regexp)
  {
    $grammar = new \Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
    $compiler = \Hoa\Compiler\Llk\Llk::load($grammar);
    $ast = $compiler->parse($regexp);
    $generator = new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random());

    return $generator->visit($ast);
  }
}
