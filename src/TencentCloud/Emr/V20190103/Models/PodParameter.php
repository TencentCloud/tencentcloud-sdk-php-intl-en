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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom pod permission and parameter
 *
 * @method string getClusterId() Obtain ID of TKE or EKS cluster
 * @method void setClusterId(string $ClusterId) Set ID of TKE or EKS cluster
 * @method string getConfig() Obtain Custom permissions
Example:
{
  "apiVersion": "v1",
  "Clusters": [
    {
      "cluster": {
        "certificate-authority-data": "xxxxxx==",
        "server": "https://xxxxx.com"
      },
      "name": "cls-xxxxx"
    }
  ],
  "contexts": [
    {
      "context": {
        "cluster": "cls-xxxxx",
        "user": "100014xxxxx"
      },
      "name": "cls-a44yhcxxxxxxxxxx"
    }
  ],
  "current-context": "cls-a4xxxx-context-default",
  "kind": "Config",
  "preferences": {},
  "users": [
    {
      "name": "100014xxxxx",
      "user": {
        "client-certificate-data": "xxxxxx",
        "client-key-data": "xxxxxx"
      }
    }
  ]
}
 * @method void setConfig(string $Config) Set Custom permissions
Example:
{
  "apiVersion": "v1",
  "Clusters": [
    {
      "cluster": {
        "certificate-authority-data": "xxxxxx==",
        "server": "https://xxxxx.com"
      },
      "name": "cls-xxxxx"
    }
  ],
  "contexts": [
    {
      "context": {
        "cluster": "cls-xxxxx",
        "user": "100014xxxxx"
      },
      "name": "cls-a44yhcxxxxxxxxxx"
    }
  ],
  "current-context": "cls-a4xxxx-context-default",
  "kind": "Config",
  "preferences": {},
  "users": [
    {
      "name": "100014xxxxx",
      "user": {
        "client-certificate-data": "xxxxxx",
        "client-key-data": "xxxxxx"
      }
    }
  ]
}
 * @method string getParameter() Obtain Custom parameters
Example:
{
    "apiVersion": "apps/v1",
    "kind": "Deployment",
    "metadata": {
      "name": "test-deployment",
      "labels": {
        "app": "test"
      }
    },
    "spec": {
      "replicas": 3,
      "selector": {
        "matchLabels": {
          "app": "test-app"
        }
      },
      "template": {
        "metadata": {
          "annotations": {
            "your-organization.com/department-v1": "test-example-v1",
            "your-organization.com/department-v2": "test-example-v2"
          },
          "labels": {
            "app": "test-app",
            "environment": "production"
          }
        },
        "spec": {
          "nodeSelector": {
            "your-organization/node-test": "test-node"
          },
          "containers": [
            {
              "name": "nginx",
              "image": "nginx:1.14.2",
              "ports": [
                {
                  "containerPort": 80
                }
              ]
            }
          ],
          "affinity": {
            "nodeAffinity": {
              "requiredDuringSchedulingIgnoredDuringExecution": {
                "nodeSelectorTerms": [
                  {
                    "matchExpressions": [
                      {
                        "key": "disk-type",
                        "operator": "In",
                        "values": [
                          "ssd",
                          "sas"
                        ]
                      },
                      {
                        "key": "cpu-num",
                        "operator": "Gt",
                        "values": [
                          "6"
                        ]
                      }
                    ]
                  }
                ]
              }
            }
          }
        }
      }
    }
  }
 * @method void setParameter(string $Parameter) Set Custom parameters
Example:
{
    "apiVersion": "apps/v1",
    "kind": "Deployment",
    "metadata": {
      "name": "test-deployment",
      "labels": {
        "app": "test"
      }
    },
    "spec": {
      "replicas": 3,
      "selector": {
        "matchLabels": {
          "app": "test-app"
        }
      },
      "template": {
        "metadata": {
          "annotations": {
            "your-organization.com/department-v1": "test-example-v1",
            "your-organization.com/department-v2": "test-example-v2"
          },
          "labels": {
            "app": "test-app",
            "environment": "production"
          }
        },
        "spec": {
          "nodeSelector": {
            "your-organization/node-test": "test-node"
          },
          "containers": [
            {
              "name": "nginx",
              "image": "nginx:1.14.2",
              "ports": [
                {
                  "containerPort": 80
                }
              ]
            }
          ],
          "affinity": {
            "nodeAffinity": {
              "requiredDuringSchedulingIgnoredDuringExecution": {
                "nodeSelectorTerms": [
                  {
                    "matchExpressions": [
                      {
                        "key": "disk-type",
                        "operator": "In",
                        "values": [
                          "ssd",
                          "sas"
                        ]
                      },
                      {
                        "key": "cpu-num",
                        "operator": "Gt",
                        "values": [
                          "6"
                        ]
                      }
                    ]
                  }
                ]
              }
            }
          }
        }
      }
    }
  }
 */
class PodParameter extends AbstractModel
{
    /**
     * @var string ID of TKE or EKS cluster
     */
    public $ClusterId;

    /**
     * @var string Custom permissions
Example:
{
  "apiVersion": "v1",
  "Clusters": [
    {
      "cluster": {
        "certificate-authority-data": "xxxxxx==",
        "server": "https://xxxxx.com"
      },
      "name": "cls-xxxxx"
    }
  ],
  "contexts": [
    {
      "context": {
        "cluster": "cls-xxxxx",
        "user": "100014xxxxx"
      },
      "name": "cls-a44yhcxxxxxxxxxx"
    }
  ],
  "current-context": "cls-a4xxxx-context-default",
  "kind": "Config",
  "preferences": {},
  "users": [
    {
      "name": "100014xxxxx",
      "user": {
        "client-certificate-data": "xxxxxx",
        "client-key-data": "xxxxxx"
      }
    }
  ]
}
     */
    public $Config;

    /**
     * @var string Custom parameters
Example:
{
    "apiVersion": "apps/v1",
    "kind": "Deployment",
    "metadata": {
      "name": "test-deployment",
      "labels": {
        "app": "test"
      }
    },
    "spec": {
      "replicas": 3,
      "selector": {
        "matchLabels": {
          "app": "test-app"
        }
      },
      "template": {
        "metadata": {
          "annotations": {
            "your-organization.com/department-v1": "test-example-v1",
            "your-organization.com/department-v2": "test-example-v2"
          },
          "labels": {
            "app": "test-app",
            "environment": "production"
          }
        },
        "spec": {
          "nodeSelector": {
            "your-organization/node-test": "test-node"
          },
          "containers": [
            {
              "name": "nginx",
              "image": "nginx:1.14.2",
              "ports": [
                {
                  "containerPort": 80
                }
              ]
            }
          ],
          "affinity": {
            "nodeAffinity": {
              "requiredDuringSchedulingIgnoredDuringExecution": {
                "nodeSelectorTerms": [
                  {
                    "matchExpressions": [
                      {
                        "key": "disk-type",
                        "operator": "In",
                        "values": [
                          "ssd",
                          "sas"
                        ]
                      },
                      {
                        "key": "cpu-num",
                        "operator": "Gt",
                        "values": [
                          "6"
                        ]
                      }
                    ]
                  }
                ]
              }
            }
          }
        }
      }
    }
  }
     */
    public $Parameter;

    /**
     * @param string $ClusterId ID of TKE or EKS cluster
     * @param string $Config Custom permissions
Example:
{
  "apiVersion": "v1",
  "Clusters": [
    {
      "cluster": {
        "certificate-authority-data": "xxxxxx==",
        "server": "https://xxxxx.com"
      },
      "name": "cls-xxxxx"
    }
  ],
  "contexts": [
    {
      "context": {
        "cluster": "cls-xxxxx",
        "user": "100014xxxxx"
      },
      "name": "cls-a44yhcxxxxxxxxxx"
    }
  ],
  "current-context": "cls-a4xxxx-context-default",
  "kind": "Config",
  "preferences": {},
  "users": [
    {
      "name": "100014xxxxx",
      "user": {
        "client-certificate-data": "xxxxxx",
        "client-key-data": "xxxxxx"
      }
    }
  ]
}
     * @param string $Parameter Custom parameters
Example:
{
    "apiVersion": "apps/v1",
    "kind": "Deployment",
    "metadata": {
      "name": "test-deployment",
      "labels": {
        "app": "test"
      }
    },
    "spec": {
      "replicas": 3,
      "selector": {
        "matchLabels": {
          "app": "test-app"
        }
      },
      "template": {
        "metadata": {
          "annotations": {
            "your-organization.com/department-v1": "test-example-v1",
            "your-organization.com/department-v2": "test-example-v2"
          },
          "labels": {
            "app": "test-app",
            "environment": "production"
          }
        },
        "spec": {
          "nodeSelector": {
            "your-organization/node-test": "test-node"
          },
          "containers": [
            {
              "name": "nginx",
              "image": "nginx:1.14.2",
              "ports": [
                {
                  "containerPort": 80
                }
              ]
            }
          ],
          "affinity": {
            "nodeAffinity": {
              "requiredDuringSchedulingIgnoredDuringExecution": {
                "nodeSelectorTerms": [
                  {
                    "matchExpressions": [
                      {
                        "key": "disk-type",
                        "operator": "In",
                        "values": [
                          "ssd",
                          "sas"
                        ]
                      },
                      {
                        "key": "cpu-num",
                        "operator": "Gt",
                        "values": [
                          "6"
                        ]
                      }
                    ]
                  }
                ]
              }
            }
          }
        }
      }
    }
  }
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Parameter",$param) and $param["Parameter"] !== null) {
            $this->Parameter = $param["Parameter"];
        }
    }
}
