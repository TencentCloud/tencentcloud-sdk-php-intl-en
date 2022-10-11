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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddRealServers request structure.
 *
 * @method integer getProjectId() Obtain Project ID corresponding to origin server
 * @method void setProjectId(integer $ProjectId) Set Project ID corresponding to origin server
 * @method array getRealServerIP() Obtain IP or domain name corresponding to origin server
 * @method void setRealServerIP(array $RealServerIP) Set IP or domain name corresponding to origin server
 * @method string getRealServerName() Obtain Name of the origin server
 * @method void setRealServerName(string $RealServerName) Set Name of the origin server
 * @method array getTagSet() Obtain List of tags
 * @method void setTagSet(array $TagSet) Set List of tags
 */
class AddRealServersRequest extends AbstractModel
{
    /**
     * @var integer Project ID corresponding to origin server
     */
    public $ProjectId;

    /**
     * @var array IP or domain name corresponding to origin server
     */
    public $RealServerIP;

    /**
     * @var string Name of the origin server
     */
    public $RealServerName;

    /**
     * @var array List of tags
     */
    public $TagSet;

    /**
     * @param integer $ProjectId Project ID corresponding to origin server
     * @param array $RealServerIP IP or domain name corresponding to origin server
     * @param string $RealServerName Name of the origin server
     * @param array $TagSet List of tags
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RealServerIP",$param) and $param["RealServerIP"] !== null) {
            $this->RealServerIP = $param["RealServerIP"];
        }

        if (array_key_exists("RealServerName",$param) and $param["RealServerName"] !== null) {
            $this->RealServerName = $param["RealServerName"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
