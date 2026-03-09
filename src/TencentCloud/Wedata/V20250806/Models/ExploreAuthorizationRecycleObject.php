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
 * Data exploration file recycling policy.
 *
 * @method ExploreFileResource getResource() Obtain File resource information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResource(ExploreFileResource $Resource) Set File resource information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRecycleSubjects() Obtain Authorization details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecycleSubjects(array $RecycleSubjects) Set Authorization details.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ExploreAuthorizationRecycleObject extends AbstractModel
{
    /**
     * @var ExploreFileResource File resource information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resource;

    /**
     * @var array Authorization details.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecycleSubjects;

    /**
     * @param ExploreFileResource $Resource File resource information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RecycleSubjects Authorization details.
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new ExploreFileResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("RecycleSubjects",$param) and $param["RecycleSubjects"] !== null) {
            $this->RecycleSubjects = [];
            foreach ($param["RecycleSubjects"] as $key => $value){
                $obj = new ExploreAuthorizeSubject();
                $obj->deserialize($value);
                array_push($this->RecycleSubjects, $obj);
            }
        }
    }
}
