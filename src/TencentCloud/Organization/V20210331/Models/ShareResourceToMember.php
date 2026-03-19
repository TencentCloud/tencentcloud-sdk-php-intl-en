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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resources shared with me.
 *
 * @method string getResourceId() Obtain Shared unit resource ID.
 * @method void setResourceId(string $ResourceId) Set Shared unit resource ID.
 * @method string getType() Obtain Resource type.
 * @method void setType(string $Type) Set Resource type.
 * @method string getUnitId() Obtain Shared unit ID.
 * @method void setUnitId(string $UnitId) Set Shared unit ID.
 * @method string getUnitName() Obtain Shared unit name.
 * @method void setUnitName(string $UnitName) Set Shared unit name.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getProductResourceId() Obtain Business resource ID.
 * @method void setProductResourceId(string $ProductResourceId) Set Business resource ID.
 * @method integer getShareManagerUin() Obtain Shared account Uin.
 * @method void setShareManagerUin(integer $ShareManagerUin) Set Shared account Uin.
 */
class ShareResourceToMember extends AbstractModel
{
    /**
     * @var string Shared unit resource ID.
     */
    public $ResourceId;

    /**
     * @var string Resource type.
     */
    public $Type;

    /**
     * @var string Shared unit ID.
     */
    public $UnitId;

    /**
     * @var string Shared unit name.
     */
    public $UnitName;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Business resource ID.
     */
    public $ProductResourceId;

    /**
     * @var integer Shared account Uin.
     */
    public $ShareManagerUin;

    /**
     * @param string $ResourceId Shared unit resource ID.
     * @param string $Type Resource type.
     * @param string $UnitId Shared unit ID.
     * @param string $UnitName Shared unit name.
     * @param string $CreateTime Creation time.
     * @param string $ProductResourceId Business resource ID.
     * @param integer $ShareManagerUin Shared account Uin.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UnitId",$param) and $param["UnitId"] !== null) {
            $this->UnitId = $param["UnitId"];
        }

        if (array_key_exists("UnitName",$param) and $param["UnitName"] !== null) {
            $this->UnitName = $param["UnitName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProductResourceId",$param) and $param["ProductResourceId"] !== null) {
            $this->ProductResourceId = $param["ProductResourceId"];
        }

        if (array_key_exists("ShareManagerUin",$param) and $param["ShareManagerUin"] !== null) {
            $this->ShareManagerUin = $param["ShareManagerUin"];
        }
    }
}
