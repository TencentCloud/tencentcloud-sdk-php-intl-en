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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeViews response structure.
 *
 * @method ClusterView getClusterView() Obtain Cluster view
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setClusterView(ClusterView $ClusterView) Set Cluster view
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getNodesView() Obtain Node view
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setNodesView(array $NodesView) Set Node view
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getKibanasView() Obtain Kibana view
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setKibanasView(array $KibanasView) Set Kibana view
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeViewsResponse extends AbstractModel
{
    /**
     * @var ClusterView Cluster view
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ClusterView;

    /**
     * @var array Node view
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $NodesView;

    /**
     * @var array Kibana view
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $KibanasView;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param ClusterView $ClusterView Cluster view
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $NodesView Node view
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $KibanasView Kibana view
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ClusterView",$param) and $param["ClusterView"] !== null) {
            $this->ClusterView = new ClusterView();
            $this->ClusterView->deserialize($param["ClusterView"]);
        }

        if (array_key_exists("NodesView",$param) and $param["NodesView"] !== null) {
            $this->NodesView = [];
            foreach ($param["NodesView"] as $key => $value){
                $obj = new NodeView();
                $obj->deserialize($value);
                array_push($this->NodesView, $obj);
            }
        }

        if (array_key_exists("KibanasView",$param) and $param["KibanasView"] !== null) {
            $this->KibanasView = [];
            foreach ($param["KibanasView"] as $key => $value){
                $obj = new KibanaView();
                $obj->deserialize($value);
                array_push($this->KibanasView, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
