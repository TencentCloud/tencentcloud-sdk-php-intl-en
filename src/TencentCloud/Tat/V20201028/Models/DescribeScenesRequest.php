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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScenes request structure.
 *
 * @method array getSceneIds() Obtain Scene ID array.

The maximum per request is 100.

Parameters must not specify both `SceneIds` and `Filters` simultaneously.

 * @method void setSceneIds(array $SceneIds) Set Scene ID array.

The maximum per request is 100.

Parameters must not specify both `SceneIds` and `Filters` simultaneously.

 * @method array getFilters() Obtain Filter criteria

- scene-id - String - required: no - (filter condition) filter by the scene id.
-scene-name - String - required: no - (filtering conditions) filter by scenario name.
-created-by - String - required: no - (filter criteria) filter by scene creator, currently only support TAT, representing public scenarios.

The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `SceneIds` and `Filters` parameters cannot be specified at the same time.
 * @method void setFilters(array $Filters) Set Filter criteria

- scene-id - String - required: no - (filter condition) filter by the scene id.
-scene-name - String - required: no - (filtering conditions) filter by scenario name.
-created-by - String - required: no - (filter criteria) filter by scene creator, currently only support TAT, representing public scenarios.

The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `SceneIds` and `Filters` parameters cannot be specified at the same time.
 * @method integer getLimit() Obtain Number of returned results, defaults to 20 with a maximum value of 100. for further introduction about `Limit`, see relevant sections in the API [overview](https://www.tencentcloud.com/document/API/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results, defaults to 20 with a maximum value of 100. for further introduction about `Limit`, see relevant sections in the API [overview](https://www.tencentcloud.com/document/API/213/15688?from_cn_redirect=1).
 * @method integer getOffset() Obtain Offset. The default value is `0`. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. The default value is `0`. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 */
class DescribeScenesRequest extends AbstractModel
{
    /**
     * @var array Scene ID array.

The maximum per request is 100.

Parameters must not specify both `SceneIds` and `Filters` simultaneously.

     */
    public $SceneIds;

    /**
     * @var array Filter criteria

- scene-id - String - required: no - (filter condition) filter by the scene id.
-scene-name - String - required: no - (filtering conditions) filter by scenario name.
-created-by - String - required: no - (filter criteria) filter by scene creator, currently only support TAT, representing public scenarios.

The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `SceneIds` and `Filters` parameters cannot be specified at the same time.
     */
    public $Filters;

    /**
     * @var integer Number of returned results, defaults to 20 with a maximum value of 100. for further introduction about `Limit`, see relevant sections in the API [overview](https://www.tencentcloud.com/document/API/213/15688?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var integer Offset. The default value is `0`. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @param array $SceneIds Scene ID array.

The maximum per request is 100.

Parameters must not specify both `SceneIds` and `Filters` simultaneously.

     * @param array $Filters Filter criteria

- scene-id - String - required: no - (filter condition) filter by the scene id.
-scene-name - String - required: no - (filtering conditions) filter by scenario name.
-created-by - String - required: no - (filter criteria) filter by scene creator, currently only support TAT, representing public scenarios.

The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `SceneIds` and `Filters` parameters cannot be specified at the same time.
     * @param integer $Limit Number of returned results, defaults to 20 with a maximum value of 100. for further introduction about `Limit`, see relevant sections in the API [overview](https://www.tencentcloud.com/document/API/213/15688?from_cn_redirect=1).
     * @param integer $Offset Offset. The default value is `0`. For more information on `Offset`, see the relevant section in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
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
        if (array_key_exists("SceneIds",$param) and $param["SceneIds"] !== null) {
            $this->SceneIds = $param["SceneIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
