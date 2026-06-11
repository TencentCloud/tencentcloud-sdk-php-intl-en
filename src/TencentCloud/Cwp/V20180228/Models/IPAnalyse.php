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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ip analysis
 *
 * @method integer getStatus() Obtain 0: safe
1: Suspicious
2 Malicious
3 Unknown
 * @method void setStatus(integer $Status) Set 0: safe
1: Suspicious
2 Malicious
3 Unknown
 * @method array getTags() Obtain Tag feature
 * @method void setTags(array $Tags) Set Tag feature
 * @method array getFamily() Obtain Family information
 * @method void setFamily(array $Family) Set Family information
 * @method array getProfile() Obtain profile
 * @method void setProfile(array $Profile) Set profile
 * @method string getIsp() Obtain Internet service provider.
 * @method void setIsp(string $Isp) Set Internet service provider.
 */
class IPAnalyse extends AbstractModel
{
    /**
     * @var integer 0: safe
1: Suspicious
2 Malicious
3 Unknown
     */
    public $Status;

    /**
     * @var array Tag feature
     */
    public $Tags;

    /**
     * @var array Family information
     */
    public $Family;

    /**
     * @var array profile
     */
    public $Profile;

    /**
     * @var string Internet service provider.
     */
    public $Isp;

    /**
     * @param integer $Status 0: safe
1: Suspicious
2 Malicious
3 Unknown
     * @param array $Tags Tag feature
     * @param array $Family Family information
     * @param array $Profile profile
     * @param string $Isp Internet service provider.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Family",$param) and $param["Family"] !== null) {
            $this->Family = $param["Family"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }
    }
}
