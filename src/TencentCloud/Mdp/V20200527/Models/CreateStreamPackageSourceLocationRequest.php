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
 * CreateStreamPackageSourceLocation request structure.
 *
 * @method string getName() Obtain SourceLocation name.
 * @method void setName(string $Name) Set SourceLocation name.
 * @method string getBaseUrl() Obtain BaseUrl.
 * @method void setBaseUrl(string $BaseUrl) Set BaseUrl.
 * @method boolean getSegmentDeliverEnable() Obtain Whether to enable patching.
 * @method void setSegmentDeliverEnable(boolean $SegmentDeliverEnable) Set Whether to enable patching.
 * @method SegmentDeliverInfo getSegmentDeliverConf() Obtain Patch configuration.
 * @method void setSegmentDeliverConf(SegmentDeliverInfo $SegmentDeliverConf) Set Patch configuration.
 * @method boolean getSegmentDeliverUsePackageEnable() Obtain Whether to enable package distribution sharding, it is enabled by default.
 * @method void setSegmentDeliverUsePackageEnable(boolean $SegmentDeliverUsePackageEnable) Set Whether to enable package distribution sharding, it is enabled by default.
 */
class CreateStreamPackageSourceLocationRequest extends AbstractModel
{
    /**
     * @var string SourceLocation name.
     */
    public $Name;

    /**
     * @var string BaseUrl.
     */
    public $BaseUrl;

    /**
     * @var boolean Whether to enable patching.
     */
    public $SegmentDeliverEnable;

    /**
     * @var SegmentDeliverInfo Patch configuration.
     */
    public $SegmentDeliverConf;

    /**
     * @var boolean Whether to enable package distribution sharding, it is enabled by default.
     */
    public $SegmentDeliverUsePackageEnable;

    /**
     * @param string $Name SourceLocation name.
     * @param string $BaseUrl BaseUrl.
     * @param boolean $SegmentDeliverEnable Whether to enable patching.
     * @param SegmentDeliverInfo $SegmentDeliverConf Patch configuration.
     * @param boolean $SegmentDeliverUsePackageEnable Whether to enable package distribution sharding, it is enabled by default.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BaseUrl",$param) and $param["BaseUrl"] !== null) {
            $this->BaseUrl = $param["BaseUrl"];
        }

        if (array_key_exists("SegmentDeliverEnable",$param) and $param["SegmentDeliverEnable"] !== null) {
            $this->SegmentDeliverEnable = $param["SegmentDeliverEnable"];
        }

        if (array_key_exists("SegmentDeliverConf",$param) and $param["SegmentDeliverConf"] !== null) {
            $this->SegmentDeliverConf = new SegmentDeliverInfo();
            $this->SegmentDeliverConf->deserialize($param["SegmentDeliverConf"]);
        }

        if (array_key_exists("SegmentDeliverUsePackageEnable",$param) and $param["SegmentDeliverUsePackageEnable"] !== null) {
            $this->SegmentDeliverUsePackageEnable = $param["SegmentDeliverUsePackageEnable"];
        }
    }
}
