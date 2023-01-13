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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSchedulerMailProfile request structure.
 *
 * @method array getWeekConfiguration() Obtain Value range: 1-7, representing Monday to Sunday respectively.
 * @method void setWeekConfiguration(array $WeekConfiguration) Set Value range: 1-7, representing Monday to Sunday respectively.
 * @method ProfileInfo getProfileInfo() Obtain Email configuration.
 * @method void setProfileInfo(ProfileInfo $ProfileInfo) Set Email configuration.
 * @method string getProfileName() Obtain Configuration name, which needs to be unique. For scheduled task emails, the name should be in the format of "scheduler_" + {instanceId}, such as "schduler_cdb-test".
 * @method void setProfileName(string $ProfileName) Set Configuration name, which needs to be unique. For scheduled task emails, the name should be in the format of "scheduler_" + {instanceId}, such as "schduler_cdb-test".
 * @method string getBindInstanceId() Obtain ID of the instance for which to configure subscription.
 * @method void setBindInstanceId(string $BindInstanceId) Set ID of the instance for which to configure subscription.
 * @method string getProduct() Obtain Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
 * @method void setProduct(string $Product) Set Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
 */
class CreateSchedulerMailProfileRequest extends AbstractModel
{
    /**
     * @var array Value range: 1-7, representing Monday to Sunday respectively.
     */
    public $WeekConfiguration;

    /**
     * @var ProfileInfo Email configuration.
     */
    public $ProfileInfo;

    /**
     * @var string Configuration name, which needs to be unique. For scheduled task emails, the name should be in the format of "scheduler_" + {instanceId}, such as "schduler_cdb-test".
     */
    public $ProfileName;

    /**
     * @var string ID of the instance for which to configure subscription.
     */
    public $BindInstanceId;

    /**
     * @var string Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
     */
    public $Product;

    /**
     * @param array $WeekConfiguration Value range: 1-7, representing Monday to Sunday respectively.
     * @param ProfileInfo $ProfileInfo Email configuration.
     * @param string $ProfileName Configuration name, which needs to be unique. For scheduled task emails, the name should be in the format of "scheduler_" + {instanceId}, such as "schduler_cdb-test".
     * @param string $BindInstanceId ID of the instance for which to configure subscription.
     * @param string $Product Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
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
        if (array_key_exists("WeekConfiguration",$param) and $param["WeekConfiguration"] !== null) {
            $this->WeekConfiguration = $param["WeekConfiguration"];
        }

        if (array_key_exists("ProfileInfo",$param) and $param["ProfileInfo"] !== null) {
            $this->ProfileInfo = new ProfileInfo();
            $this->ProfileInfo->deserialize($param["ProfileInfo"]);
        }

        if (array_key_exists("ProfileName",$param) and $param["ProfileName"] !== null) {
            $this->ProfileName = $param["ProfileName"];
        }

        if (array_key_exists("BindInstanceId",$param) and $param["BindInstanceId"] !== null) {
            $this->BindInstanceId = $param["BindInstanceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
