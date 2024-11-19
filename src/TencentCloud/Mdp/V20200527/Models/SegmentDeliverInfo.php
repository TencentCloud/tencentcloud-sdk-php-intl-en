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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SourceLocation shim configuration.
 *
 * @method string getDefaultSegmentUrl() Obtain Default content source address.
 * @method void setDefaultSegmentUrl(string $DefaultSegmentUrl) Set Default content source address.
 * @method array getNameServers() Obtain Custom server address.
 * @method void setNameServers(array $NameServers) Set Custom server address.
 */
class SegmentDeliverInfo extends AbstractModel
{
    /**
     * @var string Default content source address.
     */
    public $DefaultSegmentUrl;

    /**
     * @var array Custom server address.
     */
    public $NameServers;

    /**
     * @param string $DefaultSegmentUrl Default content source address.
     * @param array $NameServers Custom server address.
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
        if (array_key_exists("DefaultSegmentUrl",$param) and $param["DefaultSegmentUrl"] !== null) {
            $this->DefaultSegmentUrl = $param["DefaultSegmentUrl"];
        }

        if (array_key_exists("NameServers",$param) and $param["NameServers"] !== null) {
            $this->NameServers = [];
            foreach ($param["NameServers"] as $key => $value){
                $obj = new NameServer();
                $obj->deserialize($value);
                array_push($this->NameServers, $obj);
            }
        }
    }
}
