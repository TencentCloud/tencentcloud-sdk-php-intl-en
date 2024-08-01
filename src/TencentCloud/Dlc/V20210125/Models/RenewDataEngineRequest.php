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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewDataEngine request structure.
 *
 * @method string getDataEngineName() Obtain CU queue name
 * @method void setDataEngineName(string $DataEngineName) Set CU queue name
 * @method integer getTimeSpan() Obtain Renewal period in months, which is at least one month.
 * @method void setTimeSpan(integer $TimeSpan) Set Renewal period in months, which is at least one month.
 * @method integer getPayMode() Obtain Payment type. It is 1 by default and is prepaid.
 * @method void setPayMode(integer $PayMode) Set Payment type. It is 1 by default and is prepaid.
 * @method string getTimeUnit() Obtain Unit. It is m by default, and only m can be filled in.
 * @method void setTimeUnit(string $TimeUnit) Set Unit. It is m by default, and only m can be filled in.
 * @method integer getRenewFlag() Obtain Auto-renewal flag: 0 means the initial status, and there is no automatic renewal by default. If the user has the privilege to retain services with prepayment, there will be an automatic renewal. 1 means that there is an automatic renewal. 2 means that there is surely no automatic renewal. If it is not specified, the parameter is 0 by default.
 * @method void setRenewFlag(integer $RenewFlag) Set Auto-renewal flag: 0 means the initial status, and there is no automatic renewal by default. If the user has the privilege to retain services with prepayment, there will be an automatic renewal. 1 means that there is an automatic renewal. 2 means that there is surely no automatic renewal. If it is not specified, the parameter is 0 by default.
 */
class RenewDataEngineRequest extends AbstractModel
{
    /**
     * @var string CU queue name
     */
    public $DataEngineName;

    /**
     * @var integer Renewal period in months, which is at least one month.
     */
    public $TimeSpan;

    /**
     * @var integer Payment type. It is 1 by default and is prepaid.
     */
    public $PayMode;

    /**
     * @var string Unit. It is m by default, and only m can be filled in.
     */
    public $TimeUnit;

    /**
     * @var integer Auto-renewal flag: 0 means the initial status, and there is no automatic renewal by default. If the user has the privilege to retain services with prepayment, there will be an automatic renewal. 1 means that there is an automatic renewal. 2 means that there is surely no automatic renewal. If it is not specified, the parameter is 0 by default.
     */
    public $RenewFlag;

    /**
     * @param string $DataEngineName CU queue name
     * @param integer $TimeSpan Renewal period in months, which is at least one month.
     * @param integer $PayMode Payment type. It is 1 by default and is prepaid.
     * @param string $TimeUnit Unit. It is m by default, and only m can be filled in.
     * @param integer $RenewFlag Auto-renewal flag: 0 means the initial status, and there is no automatic renewal by default. If the user has the privilege to retain services with prepayment, there will be an automatic renewal. 1 means that there is an automatic renewal. 2 means that there is surely no automatic renewal. If it is not specified, the parameter is 0 by default.
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
