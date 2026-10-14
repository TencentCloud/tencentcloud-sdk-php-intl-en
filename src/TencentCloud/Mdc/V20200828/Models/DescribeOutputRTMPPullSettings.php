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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query the output RTMP pull stream configuration message.
 *
 * @method array getServerUrls() Obtain List of pull addresses.
 * @method void setServerUrls(array $ServerUrls) Set List of pull addresses.
 */
class DescribeOutputRTMPPullSettings extends AbstractModel
{
    /**
     * @var array List of pull addresses.
     */
    public $ServerUrls;

    /**
     * @param array $ServerUrls List of pull addresses.
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
        if (array_key_exists("ServerUrls",$param) and $param["ServerUrls"] !== null) {
            $this->ServerUrls = [];
            foreach ($param["ServerUrls"] as $key => $value){
                $obj = new DescribeOutputRTMPPullServerUrl();
                $obj->deserialize($value);
                array_push($this->ServerUrls, $obj);
            }
        }
    }
}
