<?php
//declare(strict_types=1);
//
//namespace Tests\Domain\Client;
//
//use App\Domain\Client\Client;
//use Tests\TestCase;
//
//class SpacexTest extends TestCase
//{
//    public function clientProvider()
//    {
//        return [
//            [1, 'bill.gates', 'Bill', 'Gates'],
//            [2, 'steve.jobs', 'Steve', 'Jobs'],
//            [3, 'mark.zuckerberg', 'Mark', 'Zuckerberg'],
//            [4, 'evan.spiegel', 'Evan', 'Spiegel'],
//            [5, 'jack.dorsey', 'Jack', 'Dorsey'],
//        ];
//    }
//
//    /**
//     * @dataProvider userProvider
//     * @param $id
//     * @param $username
//     * @param $firstName
//     * @param $lastName
//     */
//    public function testGetters($id, $username, $firstName, $lastName)
//    {
//        $user = new Client($id, $username, $firstName, $lastName);
//
//        $this->assertEquals($id, $user->getId());
//        $this->assertEquals($username, $user->getUsername());
//        $this->assertEquals($firstName, $user->getFirstName());
//        $this->assertEquals($lastName, $user->getLastName());
//    }
//
//    /**
//     * @dataProvider userProvider
//     * @param $id
//     * @param $username
//     * @param $firstName
//     * @param $lastName
//     */
//    public function testJsonSerialize($id, $username, $firstName, $lastName)
//    {
//        $user = new Client($id, $username, $firstName, $lastName);
//
//        $expectedPayload = json_encode([
//            'id' => $id,
//            'username' => $username,
//            'firstName' => $firstName,
//            'lastName' => $lastName,
//        ]);
//
//        $this->assertEquals($expectedPayload, json_encode($user));
//    }
//}
