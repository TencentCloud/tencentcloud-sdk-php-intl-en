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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of prereview information
 *
 * @method integer getTotalPeriod() Obtain Total number of years of the certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalPeriod(integer $TotalPeriod) Set Total number of years of the certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNowPeriod() Obtain Current year of the certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNowPeriod(integer $NowPeriod) Set Current year of the certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getManagerId() Obtain Certificate prereview manager ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setManagerId(string $ManagerId) Set Certificate prereview manager ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PreAuditInfo extends AbstractModel
{
    /**
     * @var integer Total number of years of the certificate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalPeriod;

    /**
     * @var integer Current year of the certificate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NowPeriod;

    /**
     * @var string Certificate prereview manager ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ManagerId;

    /**
     * @param integer $TotalPeriod Total number of years of the certificate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NowPeriod Current year of the certificate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ManagerId Certificate prereview manager ID
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TotalPeriod",$param) and $param["TotalPeriod"] !== null) {
            $this->TotalPeriod = $param["TotalPeriod"];
        }

        if (array_key_exists("NowPeriod",$param) and $param["NowPeriod"] !== null) {
            $this->NowPeriod = $param["NowPeriod"];
        }

        if (array_key_exists("ManagerId",$param) and $param["ManagerId"] !== null) {
            $this->ManagerId = $param["ManagerId"];
        }
    }
}
