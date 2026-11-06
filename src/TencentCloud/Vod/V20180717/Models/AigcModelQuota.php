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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC single-quota model.
 *
 * @method string getModelName() Obtain <p>Model name.</p>
 * @method void setModelName(string $ModelName) Set <p>Model name.</p>
 * @method integer getQuotaLimit() Obtain <p>Quota quantity of tasks.</p><p>Unit: frames/second.</p><ul><li>When QuotaType is Image, the unit is frames;</li><li>When QuotaType is Video, the unit is seconds;</li></ul>
 * @method void setQuotaLimit(integer $QuotaLimit) Set <p>Quota quantity of tasks.</p><p>Unit: frames/second.</p><ul><li>When QuotaType is Image, the unit is frames;</li><li>When QuotaType is Video, the unit is seconds;</li></ul>
 * @method string getModelVersion() Obtain <p>Model version.</p>
 * @method void setModelVersion(string $ModelVersion) Set <p>Model version.</p>
 */
class AigcModelQuota extends AbstractModel
{
    /**
     * @var string <p>Model name.</p>
     */
    public $ModelName;

    /**
     * @var integer <p>Quota quantity of tasks.</p><p>Unit: frames/second.</p><ul><li>When QuotaType is Image, the unit is frames;</li><li>When QuotaType is Video, the unit is seconds;</li></ul>
     */
    public $QuotaLimit;

    /**
     * @var string <p>Model version.</p>
     */
    public $ModelVersion;

    /**
     * @param string $ModelName <p>Model name.</p>
     * @param integer $QuotaLimit <p>Quota quantity of tasks.</p><p>Unit: frames/second.</p><ul><li>When QuotaType is Image, the unit is frames;</li><li>When QuotaType is Video, the unit is seconds;</li></ul>
     * @param string $ModelVersion <p>Model version.</p>
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("QuotaLimit",$param) and $param["QuotaLimit"] !== null) {
            $this->QuotaLimit = $param["QuotaLimit"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }
    }
}
