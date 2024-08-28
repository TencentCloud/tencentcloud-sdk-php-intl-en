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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Edit allowlisted entities
 *
 * @method array getPlaces() Obtain Region information array
 * @method void setPlaces(array $Places) Set Region information array
 * @method string getSrcIp() Obtain Source IP
 * @method void setSrcIp(string $SrcIp) Set Source IP
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getId() Obtain Data ID to be updated
 * @method void setId(integer $Id) Set Data ID to be updated
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 */
class UpdateHostLoginWhiteObj extends AbstractModel
{
    /**
     * @var array Region information array
     */
    public $Places;

    /**
     * @var string Source IP
     */
    public $SrcIp;

    /**
     * @var string Username
     */
    public $UserName;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer Data ID to be updated
     */
    public $Id;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @param array $Places Region information array
     * @param string $SrcIp Source IP
     * @param string $UserName Username
     * @param string $Remark Remarks
     * @param integer $Id Data ID to be updated
     * @param string $StartTime Start time
     * @param string $EndTime End time
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
        if (array_key_exists("Places",$param) and $param["Places"] !== null) {
            $this->Places = [];
            foreach ($param["Places"] as $key => $value){
                $obj = new Place();
                $obj->deserialize($value);
                array_push($this->Places, $obj);
            }
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
