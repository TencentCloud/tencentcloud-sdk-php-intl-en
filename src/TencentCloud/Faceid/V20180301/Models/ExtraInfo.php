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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Additional details
 *
 * @method array getRetrievalLivenessExtraInfo() Obtain Full details of the hit template; return solely the template with the maximum similarity.
 * @method void setRetrievalLivenessExtraInfo(array $RetrievalLivenessExtraInfo) Set Full details of the hit template; return solely the template with the maximum similarity.
 */
class ExtraInfo extends AbstractModel
{
    /**
     * @var array Full details of the hit template; return solely the template with the maximum similarity.
     */
    public $RetrievalLivenessExtraInfo;

    /**
     * @param array $RetrievalLivenessExtraInfo Full details of the hit template; return solely the template with the maximum similarity.
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
        if (array_key_exists("RetrievalLivenessExtraInfo",$param) and $param["RetrievalLivenessExtraInfo"] !== null) {
            $this->RetrievalLivenessExtraInfo = [];
            foreach ($param["RetrievalLivenessExtraInfo"] as $key => $value){
                $obj = new RetrievalLivenessExtraInfo();
                $obj->deserialize($value);
                array_push($this->RetrievalLivenessExtraInfo, $obj);
            }
        }
    }
}
