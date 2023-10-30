<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getZoneId() Obtain ID of the site to which the shared CNAME belongs.	
 * @method void setZoneId(string $ZoneId) Set ID of the site to which the shared CNAME belongs.	
 * @method string getSharedCNAMEPrefix() Obtain Prefix of the shared CNAME. Format: "test-api","test-api.com". Up 50 characters allowed.
The full format of the shared CNAME is: <custom prefix> + <12-bit random string in ZoneId> + "share.eo.dns[0-5].com". For example, if the prefix is "example.com", the created shared CNAME is "example.com.sai2ig51kaa5.share.eo.dnse2.com"
Example: example.com
 * @method void setSharedCNAMEPrefix(string $SharedCNAMEPrefix) Set Prefix of the shared CNAME. Format: "test-api","test-api.com". Up 50 characters allowed.
The full format of the shared CNAME is: <custom prefix> + <12-bit random string in ZoneId> + "share.eo.dns[0-5].com". For example, if the prefix is "example.com", the created shared CNAME is "example.com.sai2ig51kaa5.share.eo.dnse2.com"
Example: example.com
 * @method string getDescription() Obtain Description. It supports 1-50 characters.
 * @method void setDescription(string $Description) Set Description. It supports 1-50 characters.
 */
class CreateSharedCNAMERequest extends AbstractModel
{
    /**
     * @var string ID of the site to which the shared CNAME belongs.	
     */
    public $ZoneId;

    /**
     * @var string Prefix of the shared CNAME. Format: "test-api","test-api.com". Up 50 characters allowed.
The full format of the shared CNAME is: <custom prefix> + <12-bit random string in ZoneId> + "share.eo.dns[0-5].com". For example, if the prefix is "example.com", the created shared CNAME is "example.com.sai2ig51kaa5.share.eo.dnse2.com"
Example: example.com
     */
    public $SharedCNAMEPrefix;

    /**
     * @var string Description. It supports 1-50 characters.
     */
    public $Description;

    /**
     * @param string $ZoneId ID of the site to which the shared CNAME belongs.	
     * @param string $SharedCNAMEPrefix Prefix of the shared CNAME. Format: "test-api","test-api.com". Up 50 characters allowed.
The full format of the shared CNAME is: <custom prefix> + <12-bit random string in ZoneId> + "share.eo.dns[0-5].com". For example, if the prefix is "example.com", the created shared CNAME is "example.com.sai2ig51kaa5.share.eo.dnse2.com"
Example: example.com
     * @param string $Description Description. It supports 1-50 characters.
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
