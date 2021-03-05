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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Project description
 *
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getOwnerUin() Obtain The `uin` of the resource owner (root account)
 * @method void setOwnerUin(integer $OwnerUin) Set The `uin` of the resource owner (root account)
 * @method integer getAppId() Obtain Application ID
 * @method void setAppId(integer $AppId) Set Application ID
 * @method string getName() Obtain Project name
 * @method void setName(string $Name) Set Project name
 * @method integer getCreatorUin() Obtain Creator `uin`
 * @method void setCreatorUin(integer $CreatorUin) Set Creator `uin`
 * @method string getSrcPlat() Obtain Source platform
 * @method void setSrcPlat(string $SrcPlat) Set Source platform
 * @method integer getSrcAppId() Obtain Source `AppId`
 * @method void setSrcAppId(integer $SrcAppId) Set Source `AppId`
 * @method integer getStatus() Obtain Project status. 0: normal; -1: disabled; 3: default project.
 * @method void setStatus(integer $Status) Set Project status. 0: normal; -1: disabled; 3: default project.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getIsDefault() Obtain Whether it is the default project. 1: yes; 0: no.
 * @method void setIsDefault(integer $IsDefault) Set Whether it is the default project. 1: yes; 0: no.
 * @method string getInfo() Obtain Description
 * @method void setInfo(string $Info) Set Description
 */
class Project extends AbstractModel
{
    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer The `uin` of the resource owner (root account)
     */
    public $OwnerUin;

    /**
     * @var integer Application ID
     */
    public $AppId;

    /**
     * @var string Project name
     */
    public $Name;

    /**
     * @var integer Creator `uin`
     */
    public $CreatorUin;

    /**
     * @var string Source platform
     */
    public $SrcPlat;

    /**
     * @var integer Source `AppId`
     */
    public $SrcAppId;

    /**
     * @var integer Project status. 0: normal; -1: disabled; 3: default project.
     */
    public $Status;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Whether it is the default project. 1: yes; 0: no.
     */
    public $IsDefault;

    /**
     * @var string Description
     */
    public $Info;

    /**
     * @param integer $ProjectId Project ID
     * @param integer $OwnerUin The `uin` of the resource owner (root account)
     * @param integer $AppId Application ID
     * @param string $Name Project name
     * @param integer $CreatorUin Creator `uin`
     * @param string $SrcPlat Source platform
     * @param integer $SrcAppId Source `AppId`
     * @param integer $Status Project status. 0: normal; -1: disabled; 3: default project.
     * @param string $CreateTime Creation time
     * @param integer $IsDefault Whether it is the default project. 1: yes; 0: no.
     * @param string $Info Description
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

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("SrcPlat",$param) and $param["SrcPlat"] !== null) {
            $this->SrcPlat = $param["SrcPlat"];
        }

        if (array_key_exists("SrcAppId",$param) and $param["SrcAppId"] !== null) {
            $this->SrcAppId = $param["SrcAppId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }
    }
}
