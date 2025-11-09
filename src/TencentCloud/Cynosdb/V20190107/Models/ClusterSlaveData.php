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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getOldMasterZone() Obtain Old primary availability zone.
 * @method void setOldMasterZone(string $OldMasterZone) Set Old primary availability zone.
 * @method array getOldSlaveZone() Obtain 
 * @method void setOldSlaveZone(array $OldSlaveZone) Set 
 * @method string getNewMasterZone() Obtain New primary availability zone.
 * @method void setNewMasterZone(string $NewMasterZone) Set New primary availability zone.
 * @method array getNewSlaveZone() Obtain 
 * @method void setNewSlaveZone(array $NewSlaveZone) Set 
 * @method array getNewSlaveZoneAttr() Obtain New from availability zone attribute.
 * @method void setNewSlaveZoneAttr(array $NewSlaveZoneAttr) Set New from availability zone attribute.
 * @method array getOldSlaveZoneAttr() Obtain Old availability zone attributes.
 * @method void setOldSlaveZoneAttr(array $OldSlaveZoneAttr) Set Old availability zone attributes.
 */
class ClusterSlaveData extends AbstractModel
{
    /**
     * @var string Old primary availability zone.
     */
    public $OldMasterZone;

    /**
     * @var array 
     */
    public $OldSlaveZone;

    /**
     * @var string New primary availability zone.
     */
    public $NewMasterZone;

    /**
     * @var array 
     */
    public $NewSlaveZone;

    /**
     * @var array New from availability zone attribute.
     */
    public $NewSlaveZoneAttr;

    /**
     * @var array Old availability zone attributes.
     */
    public $OldSlaveZoneAttr;

    /**
     * @param string $OldMasterZone Old primary availability zone.
     * @param array $OldSlaveZone 
     * @param string $NewMasterZone New primary availability zone.
     * @param array $NewSlaveZone 
     * @param array $NewSlaveZoneAttr New from availability zone attribute.
     * @param array $OldSlaveZoneAttr Old availability zone attributes.
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
        if (array_key_exists("OldMasterZone",$param) and $param["OldMasterZone"] !== null) {
            $this->OldMasterZone = $param["OldMasterZone"];
        }

        if (array_key_exists("OldSlaveZone",$param) and $param["OldSlaveZone"] !== null) {
            $this->OldSlaveZone = $param["OldSlaveZone"];
        }

        if (array_key_exists("NewMasterZone",$param) and $param["NewMasterZone"] !== null) {
            $this->NewMasterZone = $param["NewMasterZone"];
        }

        if (array_key_exists("NewSlaveZone",$param) and $param["NewSlaveZone"] !== null) {
            $this->NewSlaveZone = $param["NewSlaveZone"];
        }

        if (array_key_exists("NewSlaveZoneAttr",$param) and $param["NewSlaveZoneAttr"] !== null) {
            $this->NewSlaveZoneAttr = [];
            foreach ($param["NewSlaveZoneAttr"] as $key => $value){
                $obj = new SlaveZoneAttrItem();
                $obj->deserialize($value);
                array_push($this->NewSlaveZoneAttr, $obj);
            }
        }

        if (array_key_exists("OldSlaveZoneAttr",$param) and $param["OldSlaveZoneAttr"] !== null) {
            $this->OldSlaveZoneAttr = [];
            foreach ($param["OldSlaveZoneAttr"] as $key => $value){
                $obj = new SlaveZoneAttrItem();
                $obj->deserialize($value);
                array_push($this->OldSlaveZoneAttr, $obj);
            }
        }
    }
}
