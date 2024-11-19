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
 * TimeSignalInfo.
 *
 * @method string getEventID() Obtain EventID.
 * @method void setEventID(string $EventID) Set EventID.
 * @method string getUPIDType() Obtain UPIDType.
 * @method void setUPIDType(string $UPIDType) Set UPIDType.
 * @method string getUPID() Obtain UPID.
 * @method void setUPID(string $UPID) Set UPID.
 * @method string getTypeID() Obtain TypeID.
 * @method void setTypeID(string $TypeID) Set TypeID.
 * @method string getNum() Obtain Num.
 * @method void setNum(string $Num) Set Num.
 * @method string getExpected() Obtain Expected.
 * @method void setExpected(string $Expected) Set Expected.
 * @method string getSubsegmentNum() Obtain SubsegmentNum.
 * @method void setSubsegmentNum(string $SubsegmentNum) Set SubsegmentNum.
 * @method string getSubsegmentsExpected() Obtain SubsegmentsExpected.
 * @method void setSubsegmentsExpected(string $SubsegmentsExpected) Set SubsegmentsExpected.
 */
class TimeSignalInfo extends AbstractModel
{
    /**
     * @var string EventID.
     */
    public $EventID;

    /**
     * @var string UPIDType.
     */
    public $UPIDType;

    /**
     * @var string UPID.
     */
    public $UPID;

    /**
     * @var string TypeID.
     */
    public $TypeID;

    /**
     * @var string Num.
     */
    public $Num;

    /**
     * @var string Expected.
     */
    public $Expected;

    /**
     * @var string SubsegmentNum.
     */
    public $SubsegmentNum;

    /**
     * @var string SubsegmentsExpected.
     */
    public $SubsegmentsExpected;

    /**
     * @param string $EventID EventID.
     * @param string $UPIDType UPIDType.
     * @param string $UPID UPID.
     * @param string $TypeID TypeID.
     * @param string $Num Num.
     * @param string $Expected Expected.
     * @param string $SubsegmentNum SubsegmentNum.
     * @param string $SubsegmentsExpected SubsegmentsExpected.
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
        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("UPIDType",$param) and $param["UPIDType"] !== null) {
            $this->UPIDType = $param["UPIDType"];
        }

        if (array_key_exists("UPID",$param) and $param["UPID"] !== null) {
            $this->UPID = $param["UPID"];
        }

        if (array_key_exists("TypeID",$param) and $param["TypeID"] !== null) {
            $this->TypeID = $param["TypeID"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("Expected",$param) and $param["Expected"] !== null) {
            $this->Expected = $param["Expected"];
        }

        if (array_key_exists("SubsegmentNum",$param) and $param["SubsegmentNum"] !== null) {
            $this->SubsegmentNum = $param["SubsegmentNum"];
        }

        if (array_key_exists("SubsegmentsExpected",$param) and $param["SubsegmentsExpected"] !== null) {
            $this->SubsegmentsExpected = $param["SubsegmentsExpected"];
        }
    }
}
