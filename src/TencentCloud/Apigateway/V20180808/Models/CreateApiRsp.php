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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Return of API creation
 *
 * @method string getApiId() Obtain API ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiId(string $ApiId) Set API ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPath() Obtain Path
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set Path
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getMethod() Obtain Request method
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setMethod(string $Method) Set Request method
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Status of the import task
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Status of the import task
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getErrMsg() Obtain Details of the error
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setErrMsg(string $ErrMsg) Set Details of the error
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getApiName() Obtain API name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setApiName(string $ApiName) Set API name
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class CreateApiRsp extends AbstractModel
{
    /**
     * @var string API ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiId;

    /**
     * @var string Path
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var string Request method
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Method;

    /**
     * @var string Creation time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @var string Status of the import task
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Details of the error
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ErrMsg;

    /**
     * @var string API name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ApiName;

    /**
     * @param string $ApiId API ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Path Path
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Method Request method
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Status Status of the import task
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ErrMsg Details of the error
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ApiName API name
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }
    }
}
