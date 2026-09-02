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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tag query result item
 *
 * @method string getAlertId() Obtain <p>Alarm ID</p>
 * @method void setAlertId(string $AlertId) Set <p>Alarm ID</p>
 * @method array getCloudTags() Obtain <p>Tencent Cloud tag</p>
 * @method void setCloudTags(array $CloudTags) Set <p>Tencent Cloud tag</p>
 * @method array getCSIPTags() Obtain <p>Security Center tag</p>
 * @method void setCSIPTags(array $CSIPTags) Set <p>Security Center tag</p>
 * @method array getThreatTags() Obtain <p>Intelligence tag.</p>
 * @method void setThreatTags(array $ThreatTags) Set <p>Intelligence tag.</p>
 * @method IPIntelInfo getIPIntel() Obtain <p>IP intelligence information</p>
 * @method void setIPIntel(IPIntelInfo $IPIntel) Set <p>IP intelligence information</p>
 */
class EdrAlertTagItem extends AbstractModel
{
    /**
     * @var string <p>Alarm ID</p>
     */
    public $AlertId;

    /**
     * @var array <p>Tencent Cloud tag</p>
     */
    public $CloudTags;

    /**
     * @var array <p>Security Center tag</p>
     */
    public $CSIPTags;

    /**
     * @var array <p>Intelligence tag.</p>
     */
    public $ThreatTags;

    /**
     * @var IPIntelInfo <p>IP intelligence information</p>
     */
    public $IPIntel;

    /**
     * @param string $AlertId <p>Alarm ID</p>
     * @param array $CloudTags <p>Tencent Cloud tag</p>
     * @param array $CSIPTags <p>Security Center tag</p>
     * @param array $ThreatTags <p>Intelligence tag.</p>
     * @param IPIntelInfo $IPIntel <p>IP intelligence information</p>
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
        if (array_key_exists("AlertId",$param) and $param["AlertId"] !== null) {
            $this->AlertId = $param["AlertId"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("CSIPTags",$param) and $param["CSIPTags"] !== null) {
            $this->CSIPTags = [];
            foreach ($param["CSIPTags"] as $key => $value){
                $obj = new CSIPTag();
                $obj->deserialize($value);
                array_push($this->CSIPTags, $obj);
            }
        }

        if (array_key_exists("ThreatTags",$param) and $param["ThreatTags"] !== null) {
            $this->ThreatTags = $param["ThreatTags"];
        }

        if (array_key_exists("IPIntel",$param) and $param["IPIntel"] !== null) {
            $this->IPIntel = new IPIntelInfo();
            $this->IPIntel->deserialize($param["IPIntel"]);
        }
    }
}
