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
 * COS-type API configuration
 *
 * @method string getAction() Obtain Specifies how the backend COS bucket is called by the API. The frontend request method and Action can be:
GET：GetObject
PUT：PutObject
POST：PostObject、AppendObject
HEAD： HeadObject
DELETE： DeleteObject
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAction(string $Action) Set Specifies how the backend COS bucket is called by the API. The frontend request method and Action can be:
GET：GetObject
PUT：PutObject
POST：PostObject、AppendObject
HEAD： HeadObject
DELETE： DeleteObject
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getBucketName() Obtain Backend COS bucket of the API
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setBucketName(string $BucketName) Set Backend COS bucket of the API
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getAuthorization() Obtain Whether to enable the backend COS signature for the API. It defaults to `false`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAuthorization(boolean $Authorization) Set Whether to enable the backend COS signature for the API. It defaults to `false`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getPathMatchMode() Obtain The path matching mode of the backend COS service
`BackEndPath`: Match the backend path
`FullPath`: Match the full path

Default: `BackEndPath`
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPathMatchMode(string $PathMatchMode) Set The path matching mode of the backend COS service
`BackEndPath`: Match the backend path
`FullPath`: Match the full path

Default: `BackEndPath`
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class CosConfig extends AbstractModel
{
    /**
     * @var string Specifies how the backend COS bucket is called by the API. The frontend request method and Action can be:
GET：GetObject
PUT：PutObject
POST：PostObject、AppendObject
HEAD： HeadObject
DELETE： DeleteObject
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Action;

    /**
     * @var string Backend COS bucket of the API
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $BucketName;

    /**
     * @var boolean Whether to enable the backend COS signature for the API. It defaults to `false`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Authorization;

    /**
     * @var string The path matching mode of the backend COS service
`BackEndPath`: Match the backend path
`FullPath`: Match the full path

Default: `BackEndPath`
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $PathMatchMode;

    /**
     * @param string $Action Specifies how the backend COS bucket is called by the API. The frontend request method and Action can be:
GET：GetObject
PUT：PutObject
POST：PostObject、AppendObject
HEAD： HeadObject
DELETE： DeleteObject
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $BucketName Backend COS bucket of the API
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $Authorization Whether to enable the backend COS signature for the API. It defaults to `false`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $PathMatchMode The path matching mode of the backend COS service
`BackEndPath`: Match the backend path
`FullPath`: Match the full path

Default: `BackEndPath`
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Authorization",$param) and $param["Authorization"] !== null) {
            $this->Authorization = $param["Authorization"];
        }

        if (array_key_exists("PathMatchMode",$param) and $param["PathMatchMode"] !== null) {
            $this->PathMatchMode = $param["PathMatchMode"];
        }
    }
}
