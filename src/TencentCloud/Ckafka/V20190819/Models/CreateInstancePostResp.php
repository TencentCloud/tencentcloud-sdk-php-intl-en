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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data structure returned by pay-as-you-go instance APIs
 *
 * @method string getReturnCode() Obtain Returned code. `0` indicates normal status while other codes indicate errors.
 * @method void setReturnCode(string $ReturnCode) Set Returned code. `0` indicates normal status while other codes indicate errors.
 * @method string getReturnMessage() Obtain Message returned by the API. An error message will be returned if the API reports an error. 
 * @method void setReturnMessage(string $ReturnMessage) Set Message returned by the API. An error message will be returned if the API reports an error. 
 * @method CreateInstancePostData getData() Obtain Returned data.  Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setData(CreateInstancePostData $Data) Set Returned data.  Note: This field may return null, indicating that no valid values can be obtained.
 */
class CreateInstancePostResp extends AbstractModel
{
    /**
     * @var string Returned code. `0` indicates normal status while other codes indicate errors.
     */
    public $ReturnCode;

    /**
     * @var string Message returned by the API. An error message will be returned if the API reports an error. 
     */
    public $ReturnMessage;

    /**
     * @var CreateInstancePostData Returned data.  Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @param string $ReturnCode Returned code. `0` indicates normal status while other codes indicate errors.
     * @param string $ReturnMessage Message returned by the API. An error message will be returned if the API reports an error. 
     * @param CreateInstancePostData $Data Returned data.  Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMessage",$param) and $param["ReturnMessage"] !== null) {
            $this->ReturnMessage = $param["ReturnMessage"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new CreateInstancePostData();
            $this->Data->deserialize($param["Data"]);
        }
    }
}
