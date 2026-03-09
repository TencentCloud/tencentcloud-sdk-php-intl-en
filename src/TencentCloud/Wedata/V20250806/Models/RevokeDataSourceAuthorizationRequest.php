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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RevokeDataSourceAuthorization request structure.
 *
 * @method string getDataSourceId() Obtain Data source ID.
 * @method void setDataSourceId(string $DataSourceId) Set Data source ID.
 * @method string getRevokeProjectId() Obtain Reclaim the project id or the UserUin parameter. only one can be filled in.
 * @method void setRevokeProjectId(string $RevokeProjectId) Set Reclaim the project id or the UserUin parameter. only one can be filled in.
 * @method string getRevokeUser() Obtain Reclaim the list of users under the project in the format: project id_user id.
Specifies that only one of the parameters can be filled in with RevokeProjectId.


 * @method void setRevokeUser(string $RevokeUser) Set Reclaim the list of users under the project in the format: project id_user id.
Specifies that only one of the parameters can be filled in with RevokeProjectId.
 */
class RevokeDataSourceAuthorizationRequest extends AbstractModel
{
    /**
     * @var string Data source ID.
     */
    public $DataSourceId;

    /**
     * @var string Reclaim the project id or the UserUin parameter. only one can be filled in.
     */
    public $RevokeProjectId;

    /**
     * @var string Reclaim the list of users under the project in the format: project id_user id.
Specifies that only one of the parameters can be filled in with RevokeProjectId.


     */
    public $RevokeUser;

    /**
     * @param string $DataSourceId Data source ID.
     * @param string $RevokeProjectId Reclaim the project id or the UserUin parameter. only one can be filled in.
     * @param string $RevokeUser Reclaim the list of users under the project in the format: project id_user id.
Specifies that only one of the parameters can be filled in with RevokeProjectId.
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
        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("RevokeProjectId",$param) and $param["RevokeProjectId"] !== null) {
            $this->RevokeProjectId = $param["RevokeProjectId"];
        }

        if (array_key_exists("RevokeUser",$param) and $param["RevokeUser"] !== null) {
            $this->RevokeUser = $param["RevokeUser"];
        }
    }
}
