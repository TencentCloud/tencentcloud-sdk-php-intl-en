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
 * RollbackDataEngineImage request structure.
 *
 * @method string getDataEngineId() Obtain Engine ID
 * @method void setDataEngineId(string $DataEngineId) Set Engine ID
 * @method string getFromRecordId() Obtain FromRecordId parameters returned by the API for checking the availability of rolling back
 * @method void setFromRecordId(string $FromRecordId) Set FromRecordId parameters returned by the API for checking the availability of rolling back
 * @method string getToRecordId() Obtain ToRecordId parameters returned by the API for checking the availability of rolling back
 * @method void setToRecordId(string $ToRecordId) Set ToRecordId parameters returned by the API for checking the availability of rolling back
 */
class RollbackDataEngineImageRequest extends AbstractModel
{
    /**
     * @var string Engine ID
     */
    public $DataEngineId;

    /**
     * @var string FromRecordId parameters returned by the API for checking the availability of rolling back
     */
    public $FromRecordId;

    /**
     * @var string ToRecordId parameters returned by the API for checking the availability of rolling back
     */
    public $ToRecordId;

    /**
     * @param string $DataEngineId Engine ID
     * @param string $FromRecordId FromRecordId parameters returned by the API for checking the availability of rolling back
     * @param string $ToRecordId ToRecordId parameters returned by the API for checking the availability of rolling back
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
        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("FromRecordId",$param) and $param["FromRecordId"] !== null) {
            $this->FromRecordId = $param["FromRecordId"];
        }

        if (array_key_exists("ToRecordId",$param) and $param["ToRecordId"] !== null) {
            $this->ToRecordId = $param["ToRecordId"];
        }
    }
}
