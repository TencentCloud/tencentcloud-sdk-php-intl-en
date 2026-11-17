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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Malicious URL detection result
 *
 * @method array getHitUrls() Obtain <p>List of hit malicious URLs</p>
 * @method void setHitUrls(array $HitUrls) Set <p>List of hit malicious URLs</p>
 */
class UrlDetectResult extends AbstractModel
{
    /**
     * @var array <p>List of hit malicious URLs</p>
     */
    public $HitUrls;

    /**
     * @param array $HitUrls <p>List of hit malicious URLs</p>
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
        if (array_key_exists("HitUrls",$param) and $param["HitUrls"] !== null) {
            $this->HitUrls = [];
            foreach ($param["HitUrls"] as $key => $value){
                $obj = new UrlHitInfo();
                $obj->deserialize($value);
                array_push($this->HitUrls, $obj);
            }
        }
    }
}
