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
 * Reverse-check domain information
 *
 * @method string getDomain() Obtain <p>Domain name</p>
 * @method void setDomain(string $Domain) Set <p>Domain name</p>
 * @method string getAnalysisTime() Obtain <p>Analysis time</p>
 * @method void setAnalysisTime(string $AnalysisTime) Set <p>Analysis time</p>
 * @method array getTags() Obtain <p>Tag.</p>
 * @method void setTags(array $Tags) Set <p>Tag.</p>
 */
class DomainInfo extends AbstractModel
{
    /**
     * @var string <p>Domain name</p>
     */
    public $Domain;

    /**
     * @var string <p>Analysis time</p>
     */
    public $AnalysisTime;

    /**
     * @var array <p>Tag.</p>
     */
    public $Tags;

    /**
     * @param string $Domain <p>Domain name</p>
     * @param string $AnalysisTime <p>Analysis time</p>
     * @param array $Tags <p>Tag.</p>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AnalysisTime",$param) and $param["AnalysisTime"] !== null) {
            $this->AnalysisTime = $param["AnalysisTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
