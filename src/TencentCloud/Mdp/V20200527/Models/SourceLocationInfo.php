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
 * SourceLocation configuration information.
 *
 * @method string getId() Obtain ID, unique identification.
 * @method void setId(string $Id) Set ID, unique identification.
 * @method string getName() Obtain SourceLocation name.
 * @method void setName(string $Name) Set SourceLocation name.
 * @method string getRegion() Obtain area.
 * @method void setRegion(string $Region) Set area.
 * @method string getBaseUrl() Obtain BaseUrl information.
 * @method void setBaseUrl(string $BaseUrl) Set BaseUrl information.
 * @method boolean getSegmentDeliverEnable() Obtain Whether to enable patching.
 * @method void setSegmentDeliverEnable(boolean $SegmentDeliverEnable) Set Whether to enable patching.
 * @method SegmentDeliverInfo getSegmentDeliverConf() Obtain Patch configuration.
 * @method void setSegmentDeliverConf(SegmentDeliverInfo $SegmentDeliverConf) Set Patch configuration.
 * @method array getAttachedLiveSources() Obtain List of bound live broadcast source ids.
 * @method void setAttachedLiveSources(array $AttachedLiveSources) Set List of bound live broadcast source ids.
 * @method array getAttachedVodSources() Obtain List of bound on-demand source ids.
 * @method void setAttachedVodSources(array $AttachedVodSources) Set List of bound on-demand source ids.
 * @method integer getCreateTime() Obtain Source location creation time, Unix timestamp.
 * @method void setCreateTime(integer $CreateTime) Set Source location creation time, Unix timestamp.
 * @method integer getUpdateTime() Obtain Source location last modified time, Unix timestamp.
 * @method void setUpdateTime(integer $UpdateTime) Set Source location last modified time, Unix timestamp.
 * @method boolean getSegmentDeliverUsePackageEnable() Obtain Whether to enable package distribution sharding, it is enabled by default.
 * @method void setSegmentDeliverUsePackageEnable(boolean $SegmentDeliverUsePackageEnable) Set Whether to enable package distribution sharding, it is enabled by default.
 */
class SourceLocationInfo extends AbstractModel
{
    /**
     * @var string ID, unique identification.
     */
    public $Id;

    /**
     * @var string SourceLocation name.
     */
    public $Name;

    /**
     * @var string area.
     */
    public $Region;

    /**
     * @var string BaseUrl information.
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
     * @var array List of bound live broadcast source ids.
     */
    public $AttachedLiveSources;

    /**
     * @var array List of bound on-demand source ids.
     */
    public $AttachedVodSources;

    /**
     * @var integer Source location creation time, Unix timestamp.
     */
    public $CreateTime;

    /**
     * @var integer Source location last modified time, Unix timestamp.
     */
    public $UpdateTime;

    /**
     * @var boolean Whether to enable package distribution sharding, it is enabled by default.
     */
    public $SegmentDeliverUsePackageEnable;

    /**
     * @param string $Id ID, unique identification.
     * @param string $Name SourceLocation name.
     * @param string $Region area.
     * @param string $BaseUrl BaseUrl information.
     * @param boolean $SegmentDeliverEnable Whether to enable patching.
     * @param SegmentDeliverInfo $SegmentDeliverConf Patch configuration.
     * @param array $AttachedLiveSources List of bound live broadcast source ids.
     * @param array $AttachedVodSources List of bound on-demand source ids.
     * @param integer $CreateTime Source location creation time, Unix timestamp.
     * @param integer $UpdateTime Source location last modified time, Unix timestamp.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
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

        if (array_key_exists("AttachedLiveSources",$param) and $param["AttachedLiveSources"] !== null) {
            $this->AttachedLiveSources = $param["AttachedLiveSources"];
        }

        if (array_key_exists("AttachedVodSources",$param) and $param["AttachedVodSources"] !== null) {
            $this->AttachedVodSources = $param["AttachedVodSources"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SegmentDeliverUsePackageEnable",$param) and $param["SegmentDeliverUsePackageEnable"] !== null) {
            $this->SegmentDeliverUsePackageEnable = $param["SegmentDeliverUsePackageEnable"];
        }
    }
}
