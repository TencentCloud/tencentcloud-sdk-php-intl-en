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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteUsers request structure.
 *
 * @method array getDeleteIdList() Obtain List of IDs of the users to be deleted. You need to specify at least `DeleteIdList` or `DeleteNameList`. If both are specified, `DeleteNameList` will be used first.
 * @method void setDeleteIdList(array $DeleteIdList) Set List of IDs of the users to be deleted. You need to specify at least `DeleteIdList` or `DeleteNameList`. If both are specified, `DeleteNameList` will be used first.
 * @method array getDeleteNameList() Obtain List of usernames of the users to be deleted. You need to specify at least `DeleteIdList` or `DeleteNameList`. If both are specified, `DeleteNameList` will be used first.
 * @method void setDeleteNameList(array $DeleteNameList) Set List of usernames of the users to be deleted. You need to specify at least `DeleteIdList` or `DeleteNameList`. If both are specified, `DeleteNameList` will be used first.
 */
class DeleteUsersRequest extends AbstractModel
{
    /**
     * @var array List of IDs of the users to be deleted. You need to specify at least `DeleteIdList` or `DeleteNameList`. If both are specified, `DeleteNameList` will be used first.
     */
    public $DeleteIdList;

    /**
     * @var array List of usernames of the users to be deleted. You need to specify at least `DeleteIdList` or `DeleteNameList`. If both are specified, `DeleteNameList` will be used first.
     */
    public $DeleteNameList;

    /**
     * @param array $DeleteIdList List of IDs of the users to be deleted. You need to specify at least `DeleteIdList` or `DeleteNameList`. If both are specified, `DeleteNameList` will be used first.
     * @param array $DeleteNameList List of usernames of the users to be deleted. You need to specify at least `DeleteIdList` or `DeleteNameList`. If both are specified, `DeleteNameList` will be used first.
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
        if (array_key_exists("DeleteIdList",$param) and $param["DeleteIdList"] !== null) {
            $this->DeleteIdList = $param["DeleteIdList"];
        }

        if (array_key_exists("DeleteNameList",$param) and $param["DeleteNameList"] !== null) {
            $this->DeleteNameList = $param["DeleteNameList"];
        }
    }
}
