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
 * Data exploration file authorization principal.
 *
 * @method string getSubjectType() Obtain Type (user, role, group).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubjectType(string $SubjectType) Set Type (user, role, group).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSubjectValues() Obtain Value list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubjectValues(array $SubjectValues) Set Value list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPrivileges() Obtain Permission list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivileges(array $Privileges) Set Permission list
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ExploreAuthorizeSubject extends AbstractModel
{
    /**
     * @var string Type (user, role, group).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubjectType;

    /**
     * @var array Value list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubjectValues;

    /**
     * @var array Permission list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Privileges;

    /**
     * @param string $SubjectType Type (user, role, group).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SubjectValues Value list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Privileges Permission list
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
        if (array_key_exists("SubjectType",$param) and $param["SubjectType"] !== null) {
            $this->SubjectType = $param["SubjectType"];
        }

        if (array_key_exists("SubjectValues",$param) and $param["SubjectValues"] !== null) {
            $this->SubjectValues = $param["SubjectValues"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }
    }
}
