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
 * Origin server failure failover config.
 *
 * @method array getSiteFailoverStatusCodes() Obtain Origin server fault migration condition status code. The origin server response status code must hit the field return to execute origin server migration as SiteFailoverParams. The parameter value is one of 4xx, 5xx.
 * @method void setSiteFailoverStatusCodes(array $SiteFailoverStatusCodes) Set Origin server fault migration condition status code. The origin server response status code must hit the field return to execute origin server migration as SiteFailoverParams. The parameter value is one of 4xx, 5xx.
 * @method array getSiteFailoverParams() Obtain Origin server failure failover configuration parameter list. Minimum length is 1, maximum length is 2.
 * @method void setSiteFailoverParams(array $SiteFailoverParams) Set Origin server failure failover configuration parameter list. Minimum length is 1, maximum length is 2.
 */
class SiteFailoverParameters extends AbstractModel
{
    /**
     * @var array Origin server fault migration condition status code. The origin server response status code must hit the field return to execute origin server migration as SiteFailoverParams. The parameter value is one of 4xx, 5xx.
     */
    public $SiteFailoverStatusCodes;

    /**
     * @var array Origin server failure failover configuration parameter list. Minimum length is 1, maximum length is 2.
     */
    public $SiteFailoverParams;

    /**
     * @param array $SiteFailoverStatusCodes Origin server fault migration condition status code. The origin server response status code must hit the field return to execute origin server migration as SiteFailoverParams. The parameter value is one of 4xx, 5xx.
     * @param array $SiteFailoverParams Origin server failure failover configuration parameter list. Minimum length is 1, maximum length is 2.
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
        if (array_key_exists("SiteFailoverStatusCodes",$param) and $param["SiteFailoverStatusCodes"] !== null) {
            $this->SiteFailoverStatusCodes = $param["SiteFailoverStatusCodes"];
        }

        if (array_key_exists("SiteFailoverParams",$param) and $param["SiteFailoverParams"] !== null) {
            $this->SiteFailoverParams = [];
            foreach ($param["SiteFailoverParams"] as $key => $value){
                $obj = new SiteFailover();
                $obj->deserialize($value);
                array_push($this->SiteFailoverParams, $obj);
            }
        }
    }
}
