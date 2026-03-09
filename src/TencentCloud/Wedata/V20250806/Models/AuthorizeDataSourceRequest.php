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
 * AuthorizeDataSource request structure.
 *
 * @method string getDataSourceId() Obtain Data source ID.
 * @method void setDataSourceId(string $DataSourceId) Set Data source ID.
 * @method string getAuthProjectId() Obtain Authorize the target project id.
 * @method void setAuthProjectId(string $AuthProjectId) Set Authorize the target project id.
 * @method array getAuthUsers() Obtain List of users in the authorized project, format: project id_user id.
Can only select either the AuthProjectId parameter.
Authorize multiple objects. the project id must be consistent.
 * @method void setAuthUsers(array $AuthUsers) Set List of users in the authorized project, format: project id_user id.
Can only select either the AuthProjectId parameter.
Authorize multiple objects. the project id must be consistent.
 */
class AuthorizeDataSourceRequest extends AbstractModel
{
    /**
     * @var string Data source ID.
     */
    public $DataSourceId;

    /**
     * @var string Authorize the target project id.
     */
    public $AuthProjectId;

    /**
     * @var array List of users in the authorized project, format: project id_user id.
Can only select either the AuthProjectId parameter.
Authorize multiple objects. the project id must be consistent.
     */
    public $AuthUsers;

    /**
     * @param string $DataSourceId Data source ID.
     * @param string $AuthProjectId Authorize the target project id.
     * @param array $AuthUsers List of users in the authorized project, format: project id_user id.
Can only select either the AuthProjectId parameter.
Authorize multiple objects. the project id must be consistent.
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

        if (array_key_exists("AuthProjectId",$param) and $param["AuthProjectId"] !== null) {
            $this->AuthProjectId = $param["AuthProjectId"];
        }

        if (array_key_exists("AuthUsers",$param) and $param["AuthUsers"] !== null) {
            $this->AuthUsers = $param["AuthUsers"];
        }
    }
}
