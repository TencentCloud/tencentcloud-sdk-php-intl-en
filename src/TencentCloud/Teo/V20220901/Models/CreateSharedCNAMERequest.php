<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSharedCNAME request structure.
 *
 * @method string getZoneId() Obtain ID of the site associated with the shared CNAME.	
 * @method void setZoneId(string $ZoneId) Set ID of the site associated with the shared CNAME.	
 * @method string getSharedCNAMEPrefix() Obtain Share the CNAME prefix. Enter a valid domain name prefix, for example, "test-api" or "test-api.com", limited to 50 characters.

The full format of a shared CNAME is: `<custom prefix>+<12-bit random string in zoneid>+share.dnse[0-5].com`.

For example, if the prefix input is example.com, EdgeOne will create a shared CNAME for you: example.com.sai2ig51kaa5.share.dnse2.com.
 * @method void setSharedCNAMEPrefix(string $SharedCNAMEPrefix) Set Share the CNAME prefix. Enter a valid domain name prefix, for example, "test-api" or "test-api.com", limited to 50 characters.

The full format of a shared CNAME is: `<custom prefix>+<12-bit random string in zoneid>+share.dnse[0-5].com`.

For example, if the prefix input is example.com, EdgeOne will create a shared CNAME for you: example.com.sai2ig51kaa5.share.dnse2.com.
 * @method string getDescription() Obtain Description. Enter 1-50 characters.
 * @method void setDescription(string $Description) Set Description. Enter 1-50 characters.
 */
class CreateSharedCNAMERequest extends AbstractModel
{
    /**
     * @var string ID of the site associated with the shared CNAME.	
     */
    public $ZoneId;

    /**
     * @var string Share the CNAME prefix. Enter a valid domain name prefix, for example, "test-api" or "test-api.com", limited to 50 characters.

The full format of a shared CNAME is: `<custom prefix>+<12-bit random string in zoneid>+share.dnse[0-5].com`.

For example, if the prefix input is example.com, EdgeOne will create a shared CNAME for you: example.com.sai2ig51kaa5.share.dnse2.com.
     */
    public $SharedCNAMEPrefix;

    /**
     * @var string Description. Enter 1-50 characters.
     */
    public $Description;

    /**
     * @param string $ZoneId ID of the site associated with the shared CNAME.	
     * @param string $SharedCNAMEPrefix Share the CNAME prefix. Enter a valid domain name prefix, for example, "test-api" or "test-api.com", limited to 50 characters.

The full format of a shared CNAME is: `<custom prefix>+<12-bit random string in zoneid>+share.dnse[0-5].com`.

For example, if the prefix input is example.com, EdgeOne will create a shared CNAME for you: example.com.sai2ig51kaa5.share.dnse2.com.
     * @param string $Description Description. Enter 1-50 characters.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("SharedCNAMEPrefix",$param) and $param["SharedCNAMEPrefix"] !== null) {
            $this->SharedCNAMEPrefix = $param["SharedCNAMEPrefix"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
